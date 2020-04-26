<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\UserCart;
use App\User;

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
    public function getCart()
    {
        $cartItems = StoreHelperController::getCartItems();
        return response()->json($cartItems);
    }

    public function addToCart(Request $request)
    {
        $data = $request->all();

        if (auth()->check()) {
            //user authenticated

            //check if item already exist in cart
            if (!UserCart::where('user_id', '=', $data['user_id'])
                ->where('product_id', '=', $data['product_id'])
                ->where('sku_id', '=', $data['sku_id'])->exists()
            ) {

                //log new item
                UserCart::create($data);
                //pull all cart items for user
                $cartItems = StoreHelperController::getCartItems();

                //return response
                return response()->json(['items' => $cartItems, 'message' => "Product has been added to cart"]);
            }

            //return response
            return response()->json(['error' => "Item has been added to cart already"]);
        }

        return response()->json(['error' => "There is an error"]);
    }

    public function removeFromCart($item_id)
    {
        UserCart::find($item_id)->delete();
        //pull all cart items for user
        $cartItems = StoreHelperController::getCartItems();

        //return response
        return response()->json($cartItems);
    }

//    public function placeOrder(Request $request)
//    {
//
//        //Get other information are regards this order
//        $data = $request->all();
//        $batch = [];
//        $invoice = [];
//        $recipients = [];
//        // Get order items
//        $items = json_decode($request->get('items'));
//        //use transaction reference to get payStack charge
//        $payStackChargeVerify = (new PayStackVerifyTransaction)->verify($data['transaction_ref'], 1);
//        if (!isset($payStackChargeVerify['status']) || $payStackChargeVerify['status'] == false)
//            return response()->json(['Payment Was not successful']);
//        $payStackCharge = (new PayStackVerifyTransaction)->verify($data['transaction_ref'], 0);
//        //$payStackCharge = 0;
//
//
//        $recipients['buyer'] = ['email' => $data['email'], 'name' => $data['name']];
//
//        //set a batch id
//        $data['batch_id'] = 'BA' . HelperController::generateIdentifier(14);
//
//        $payload = [
//            'batch_id' => $data['batch_id'],
//            'phone' => $data['phone'],
//            'reference' => $data['transaction_ref'],
//            'status' => $payStackChargeVerify['status'],
//            'message' => $payStackChargeVerify['message'],
//            'data' => $payStackChargeVerify['data'],
//        ];
//
//        (new PaystackTransaction)->create($payload);
//
//
//        $user = (New User)->where('email', '=', $data['email'])->first();
//        if (is_null($user)) {
//            $usrData = ['name' => $data['name'], 'slug' => $this->createSlug('all_users'), 'email' => $data['email'], 'password' => Hash::make('password'), 'phone' => $data['phone'], 'address' => $data['delivery_address']];
//            $user = (new User)->create($usrData);
//        }
//        if (!is_null($user)) {
//            $data['buyer_id'] = $user->id;
//            $data['name'] = $user->name ? $user->name : null;
//            $data['email'] = $user->email ? $user->email : null;
//            $data['location'] = $data['delivery_address'];
//            $user->update(['phone' => $data['phone'], 'address' => $data['delivery_address']]);
//        }
//        unset($data['user_id']);
//
//        //get buyer
//        $data['buyer_id'] = $user->id;
//
//        //invoice holder
//        $invoice['items'] = [];
//        $invoice['buyer_id'] = $data['buyer_id'];
//
//        $batch['batch_id'] = $data['batch_id'];
//        $batch['buyer_id'] = $data['buyer_id'];
//        $batch['items_total'] = $data['items_total'];
//        $batch['grant_total'] = $data['grand_total'];
//        $batch['delivery_fee'] = $data['delivery_fee'];
//
//        /**
//         * Items are bought from same store,
//         * so, we can get the store is using
//         * the first order in the items list
//         */
//
//        $finder = $items[0]->store_identifier;
//        $store = UserStore::where('identifier', '=', $finder)->first();
//        if (is_null($store))
//            return response()->json(['store not found', $store]);
//        $batch['store_id'] = $store->id;
//
//        //set store owner email on recipients to be sent notifications
//        $storeOwner = $store->user;
//        $recipients['store'] = ['email' => $storeOwner->email, 'store_name' => $store->store_name];
//
//
//        //if there is no existing opening, create a new batch.
////        $storeSettlementBatch=(new StoreSettlementBatch)->firstOrNew(['store_id'=>$store->id,'active'=> 1],$settlementBatch);
//
//        //Calculate total student's commission and save alongside with batch details
//        $batch['total_student_commission'] = $this->calculateStudentCommission($items);
//        //fetch original product
//        //first create batch entry
//        $newBatch = (new BatchOrder)->create($batch);
//
//        $recipients['ventures'] = [];
//
//        foreach ($items as $index => $item) {
//            $mainProduct = UserBusinessProduct::find($item->original_product_id);
//            $originalProduct = UserVentureProduct::find($item->product_id);
//
//            //Fetch the business who owns the product
//            $business = StoreHelperController::fetchBusinessId($mainProduct->venture_id);
//            $recipients['ventures'][] = $mainProduct->venture_id;
//
//            $data['batch_id'] = $newBatch->batch_id;
////            $data['identifier'] = 'OD' . HelperController::generateIdentifier(14); //unique order id
//            $data['product_id'] = $item->product_id;
//            $data['business_id'] = $business;
//            $data['store_id'] = $store->id;
//            $data['quantity'] = $item->quantity;
//            $data['amount'] = $item->amount;
//            $data['product_sku'] = $item->product_sku;
//            $data['status'] = 'processing';
//            $data['forwarded'] = 1;
//            $data['commission'] = $mainProduct->product_commission;
//            $data['venture_id'] = $mainProduct->venture_id;
//            //insert original product id
//            $data['original_product_id'] = $item->original_product_id;
//
//            //Forward orders to business
//            $businessOrder = UserBusinessOrder::create($data);
//
//            //Forward orders to student from whose store this order is placed.
//            UserVentureOrder::create($data);
//
//            //set invoice data
////            $invoice['order_id'] = $businessOrder->identifier;
//            $invoice['order_id'] = $data['identifier'];
//            $invoice['order_date'] = Carbon::now();
//            $invoice['order_status'] = 'paid';
//
//            $invoice['items'][] = [
//                'product_name' => $originalProduct->product_name,
//                'description' => $originalProduct->highlight,
//                'quantity' => $item->quantity,
//                'reference' => $data['transaction_ref'],
//                'unit_cost' => $originalProduct->product_price,
//                'total' => $item->amount,
//            ];
//
//            //remove item from cart
//            if ($data['buyer_id'] > 0 && isset($item->id)) {
//                $search = UserCart::find($item->id);
//                if (!is_null($search)) {
//                    $search->delete();
//                }
//            }
//
//
//            //Attach total
//            $invoice['sub_total'] = $data['items_total'];
//            $invoice['total'] = $data['grand_total'];
//            $invoice['remark'] = "Thank you for your purchase. <br/> Our Rep will be in touch with you shortly for your order delivery";
//
//            //generate invoice
//            UserInvoice::create($invoice);
//
//            if ($data['buyer_id'] > 0) {
//                $cartItems = StoreHelperController::getCartItems();
//            } else {
//                $cartItems = [];
//            }
//
//
//            /**
//             * At this point, necessary recipients
//             * ro receive order notifications are already collected
//             * in recipients array with key referencing various entities.
//             *
//             * orders items is attached so we can send the buyer needed details
//             * about the order.
//             */
//            $totals = ['items_total' => $data['grand_total'], 'grant_total' => $data['grand_total'], 'delivery_fee' => $data['delivery_fee']];
//            $this->sendOrderMails($recipients, $totals, $items);
//
//            //send venture notifications
//            $this->sendVentureMail($recipients);
//
//
//            //send push notification to target user if offline
////        $this->handleOfflineOrderNotification($recipients);
//
//            $invoice['itemList'] = $items; //showing the user the item bought
//
//            //changing the value of status in OrderList table
//            Orderlist::where('identifier_id',$data['identifier'])
//                ->update(['status'=>'paid']);
//
//            // return success response with invoice
//            return response()->json([
//                'invoice' => $invoice,
//                'cartItems' => $cartItems,
//                'message' => "Your order has been successfully place. You will be notified on your order status."
//            ]);
//        }
//    }


//    private function sendOrderMails($recipients, $totals = [], $items = [])
//    {
//        //First mail the buyer with items
//        $mailContent = [
//            'email' => $recipients['buyer']['email'],
//            'name' => $recipients['buyer']['name'],
//            'subject' => "Your order details!",
//            'items' => $items,
//            'total' => $totals,
//            'role' => 'buyer'
//        ];
//
//        //send to student
//        dispatch(new SendOrderNotification($mailContent));
//
//        //Prepare store contents
//        $mailContent['email'] = $recipients['store']['email'];
//        $mailContent['name'] = $recipients['store']['store_name'];
//        $mailContent['buyer'] = $recipients['buyer']['name'];
//        $mailContent['subject'] = "New Order Alert :: Startev Africa";
//        $mailContent['role'] = 'store';
//        $mailContent['total'] = $totals;
//        //send to student
//        dispatch(new SendOrderNotification($mailContent));
//
//        //What of the Store administrators
//        $mailContent['email'] = "info@startev.africa";
//        $mailContent['name'] = "Mfon";
//        dispatch(new SendOrderNotification($mailContent));
//        Admin::all()
//            ->mapToGroups(function ($admin) use (&$mailContent, $recipients) {
//                $mailContent['email'] = $admin->email;
//                $mailContent['name'] = $admin->name;
//                dispatch(new SendOrderNotification($mailContent));
//                return [];
//            });
//        //All mail sent. Anyway don't bother about the memory consumption. Job things!
//
//    }
}
