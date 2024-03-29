<?php

namespace App\Http\Controllers\Store;

use App\Events\NewOrderPlaceEvent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperController;
use App\Info;
use App\Model\Client;
use Illuminate\Http\Request;
use App\Model\UserCart;
use App\Orderlist;
use App\PaystackTransaction;
use App\User;
use App\Product;
use App\Setting;
use App\Repositories\PayStackVerifyTransaction;
use App\UserInvoice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class mainStoreController extends Controller
{

    /**
     * @var User
     */
    protected $user;

    protected $url;


    /**
     * ApiAccountController constructor.
     * @param User $userModel
     */
    public function __construct(User $userModel)
    {
        //User model property
        $this->user = $userModel;

        //Base url
        $this->url = url('/');
    }
    public function getCart($user_id)
    {
        $cartItems = StoreHelperController::getCartItems($user_id);
        return response()->json($cartItems);
    }

    public function addToCart(Request $request)
    {
        $data = $request->all();

        $user = Client::find($data['user_id']);
        $product = Product::find($data['product_id']);

        //check if item already exist in cart
        if ($user && $product) {
            $item = $user->cart()->where('product_id', '=', $data['product_id'])->first();
            if(!$item && ($product->available_qty > 0)){
                $user->cart()->create([
                    'product_id'=>$data['product_id'],
                    'amount'=>$product->price,
                ]);
            }elseif($item && $product->available_qty > ($item->quantity + 1)){
                $item->update([
                    'quantity'=>($item->quantity + 1),
                    'amount'=>($item->quantity + 1) * $product->price,
                ]);
            }
            
            //pull all cart items for user
            $cartItems = StoreHelperController::getCartItems($data['user_id']);

            //return response
            return response()->json(['items' => $cartItems, 'message' => "Product has been added to cart"]);
        }elseif($product->available_qty < 1){
            //return response
            return response()->json(['error' => "Item is out of stock!"]);
        }else{
            //return response
            return response()->json(['error' => "User/Item does not exist!"]);
        }
    }

    public function removeFromCart($item_id, $user_id)
    {
        UserCart::where('product_id', $item_id)->where('user_id', $user_id)->delete();
        //pull all cart items for user
        $cartItems = StoreHelperController::getCartItems($user_id);

        //return response
        return response()->json($cartItems);
    }
    public function getLocalProduct(Request $request)
    {
        $products = Product::with('Reviews')->find(['product_id']);
        $result = ['product' => $products];
        return response()->json($result);
    }
    /**
     * calculating the distance and product in the cart
     *
     * @param  \App\Http\Requests\Request  $request
     * @return Array
     */
    public function storeCalculateDelivery(Request $request)
    {

        $items = $request->all();
        // $percentage = Info::where('key', 'percentage')->first()->value;
        $percentage = 0.7;
        $cart_items = json_decode($request->get('cart_item'));
        $total = 0;
        $cart_ids = '';
        foreach ($cart_items as $cart_item) {
            $total += $cart_item->quantity * $cart_item->product->price;
            if (isset($cart_item->id)) {
                $cart_ids .= ($cart_item->id) . '-';
            } else {
                $cart_ids .=  0 . '-';
            }
        }
        $cart_ids = substr($cart_ids, 0, -1); //removing the last (-)
        $deliveryFee = 1;
        // $deliveryFee = 1000;
        $salePercentage = (($total * $percentage) / 100);
        $grandTotal = $total + $deliveryFee + $salePercentage;
        $grandTotal = round($grandTotal);
        $identifier = 'NKT-' . HelperController::generateIdentifier(14); //unique order id
        $key = Setting::getValue('PAYSTACK_PUBLIC_LIVE');
        // $key = Setting::getValue('PAYSTACK_PUBLIC_TEST');
        $details = [
            'deliveryFee' => $deliveryFee,
            'percentage' => $salePercentage,
            'grandTotal' => $grandTotal,
            'total' => $total,
            'order_time' => Carbon::now(),
            'identifier' => $identifier,
            'key' => $key
        ];

        Orderlist::create([
            'identifier_id' => $identifier,
            'cart_id' => $cart_ids,
            'client_id' => $items['user_id'],
            'buyer_email' => $items['email'],
            'buyer_name' => $items['name'],
            'buyer_address' => $items['delivery_address'],
            'buyer_phone' => $items['phone'],
            'status' => 'Not paid',
            'amount' => $grandTotal
        ]);

        return response()->json(['amount_details' => $details]);
    }

    public function placeOrder(Request $request){
        //Get other information are regards this order
        $data = $request->all();
        $invoice = [];
        $recipients = [];
        // Get order items
        $items = json_decode($request->get('items'));

        //get buyer
        $user = (new Client)->find($data['user_id']);

        //use transaction reference to get payStack charge
        $payStackChargeVerify = (new PayStackVerifyTransaction)->verify($data['transaction_ref'], 1);
        
        if (!isset($payStackChargeVerify['data']['status'])){
            return response()->json(['error' => true, 'message' => 'Payment Was not successful']);
        }
        
        $payStackCharge = (new PayStackVerifyTransaction)->verify($data['transaction_ref'], 0);

        $recipients['buyer'] = ['email' => $data['email'], 'name' => $data['name']];

        $payload = [
            'phone' => $data['phone'],
            'order_id' => $data['identifier'],
            'user_id' => $user->id,
            'reference' => $data['transaction_ref'],
            'status' => $payStackChargeVerify['status'],
            'message' => $payStackChargeVerify['message'],
            'data' => $payStackChargeVerify['data'],
        ];

        $transaction = (new PaystackTransaction)->create($payload);
        
        $data['buyer_id'] = $user->id;

        //invoice holder
        $invoice['items'] = [];
        $invoice['buyer_id'] = $data['buyer_id'];
        $invoice['order_id'] = $data['identifier'];
        $invoice['order_date'] = Carbon::now();
        $invoice['order_status'] = 'paid';

        foreach ($items as $index => $item) {
            $invoice['items'][] = [
                'product_id' => $item->product->id,
                'product_name' => $item->product->name,
                'description' => $item->product->description,
                'quantity' => $item->quantity,
                'reference' => $data['transaction_ref'],
                'unit_cost' => $item->product->price,
                'total' => $item->amount
            ];

            $product = Product::find($item->product->id);
            if($product){
                $qty_sold = $product->qty_sold + $item->quantity;
                $available_qty = $product->stock - $qty_sold;
                $product->update([
                    'qty_sold'=>$qty_sold,
                    'available_qty'=>$available_qty > 0 ? $available_qty : 0,
                ]);
            }
        }
        //remove items from cart
        $user->cart()->delete();

        $invoice['remark'] = "Thank you for your purchase. Our Rep will be in touch with you shortly for your order delivery";

        //Attach total
        $invoice['sub_total'] = $data['items_total'];
        $invoice['total'] = $data['grand_total'];
        
        //generate invoice
        $invoice = UserInvoice::create($invoice);
        
        $cartItems = StoreHelperController::getCartItems($user->id);

        //send push notification to target user if offline
        //        $this->handleOfflineOrderNotification($recipients);

        $invoice['itemList'] = $items; //showing the user the item bought
        
        //changing order payment status
        Orderlist::where('identifier_id', $data['identifier'])
            ->update([
                'transaction_id' => $transaction->id,
                'status' => 'paid',
            ]);

        // return success response with invoice
        return response()->json([
            'invoice' => $invoice,
            'cartItems' => $cartItems,
            'message' => "Your order has been successfully place. You will be notified on your order status."
        ]);
    }


    private function sendOrderMails($recipients, $totals = [], $items = [])
    {
        //First mail the buyer with items
        $mailContent = [
            'email' => $recipients['buyer']['email'],
            'name' => $recipients['buyer']['name'],
            'subject' => "Your order details!",
            'items' => $items,
            'total' => $totals,
            'role' => 'buyer'
        ];

        //send to buyer
        event(new NewOrderPlaceEvent($mailContent));
        //All mail sent. Anyway don't bother about the memory consumption. Job things!
    }

    //Orderlist per user
    public function orderList($client_id)
    {
        $orderList = orderList::where('client_id', $client_id)->where('status', 'paid')->latest()->paginate(5);
        return response()->json(['orderlist' => $orderList]);
    }

    //Orderlist of recent of 3days
    public function orderListRecent($client_id)
    {
        $recent = orderList::where('client_id', $client_id)
            ->whereDate('created_at', '>', Carbon::now()->subDays(3))
            ->limit(5)->latest()->get();
        return response()->json(['recent_order' => $recent]);
    }

    //details of a orderlist.
    public function orderListDetails($identifier_id)
    {
        $orderdetails = orderList::with('userInvoice')->where('identifier_id', $identifier_id)->first();
        // $Vatfee = Info::where('key', 'percentage')->pluck('value');
        return response()->json(['details' => $orderdetails, 'vatFee' => 0.7]);
    }
}
