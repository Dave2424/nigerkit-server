<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orderlist as Order;
use Carbon\Carbon;

class OrderController extends Controller
{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }

    public function index() {
        $this->__construct();
        return view('pages.order.index');
    }

    public function list(){
        $this->__construct();
        $data = request()->all();
        // dd($data);
        $limit = 10;
        $order = "desc";
        $orderBy = "created_at";
        if(isset($data['limit'])){
            $limit = $data['limit'];
        }
        if(isset($data['order'])){
            $order = $data['order'];
        }
        if(isset($data['orderBy'])){
            $orderBy = $data['orderBy'];
        }

        $query = Order::with(['userInvoice', 'transaction']);

        if(isset($data['search'])){
            $query = $query->where('identifier_id', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere('buyer_email', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere($orderBy, 'LIKE', '%' . $data['search'] . '%');
        }
        
        $orders = $query->orderBy($orderBy, $order)->paginate($limit);

        return response()->json([
            'success'=>true,
            'orders'=>$orders
        ]);
    }

    public function trashedList(){
        $this->__construct();
        $data = request()->all();
        // dd($data);
        $limit = 10;
        $order = "desc";
        $orderBy = "created_at";
        if(isset($data['limit'])){
            $limit = $data['limit'];
        }
        if(isset($data['order'])){
            $order = $data['order'];
        }
        if(isset($data['orderBy'])){
            $orderBy = $data['orderBy'];
        }

        $query = Order::with(['userInvoice', 'transaction'])->withTrashed();

        if(isset($data['search'])){
            $query = $query->where('identifier_id', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere('buyer_email', 'LIKE', '%' . $data['search'] . '%')
                ->orWhere($orderBy, 'LIKE', '%' . $data['search'] . '%');
        }
        
        $orders = $query->where('deleted_at', '!=', null)->orderBy($orderBy, $order)->paginate($limit);

        return response()->json([
            'success'=>true,
            'orders'=>$orders
        ]);
    }

    public function processOrder(){
        $this->__construct();
        $data = request()->all();
        $order = Order::with(['userInvoice', 'transaction'])->find($data['order_id']);
        if($order){
            $order->update([
                'delivery_status'=>Order::$process,
                'delivery_date'=>Carbon::now()
            ]);

            $order->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"New Order Processed",
                'detail'=>$this->user->name . " processed an order with ID: ".$order->identifier_id,
            ]);

            return response()->json([
                'success'=>true,
                'order'=>$order
            ]);
        }
        return response()->json([
            'success'=>false,
        ]);
    }

    public function shipOrder(){
        $this->__construct();
        $data = request()->all();
        $order = Order::with(['userInvoice', 'transaction'])->find($data['order_id']);
        if($order){
            $order->update([
                'delivery_status'=>Order::$ship,
                'delivery_date'=>Carbon::now()
            ]);

            $order->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"New Order Shipped",
                'detail'=>$this->user->name . " shipped an order with ID: ".$order->identifier_id,
            ]);

            return response()->json([
                'success'=>true,
                'order'=>$order
            ]);
        }
        return response()->json([
            'success'=>false,
        ]);
    }

    public function removeOrder(){
        $this->__construct();
        $data = request()->all();
        $order = Order::find($data['order_id']);
        if($order){
            $order->delete();

            $order->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"New Order Trashed",
                'detail'=>$this->user->name . " trashed an order with ID: ".$order->identifier_id,
            ]);

            return response()->json([
                'success'=>true,
            ]);
        }
        return response()->json([
            'success'=>false,
        ]);
    }

    public function restoreDelete(){
        $this->__construct();
        $data = request()->all();
        $order = Order::withTrashed()->find($data['order_id']);
        if ($order && $order->trashed()) {
            $order->restore();

            $order->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"Order Restored",
                'detail'=>$this->user->name . " restored an order with ID: ".$order->identifier_id." from trash",
            ]);

            return response()->json([
                'success'=>true,
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry the order can't be found"
        ]);
    }

    public function forceDelete(){
        $this->__construct();
        $data = request()->all();
        $order = Order::withTrashed()->find($data['order_id']);
        if ($order && $order->trashed()) {
            $order->forceDelete();
            $order->activities()->create([
                'user_id'=>$this->user->id,
                'title'=>"Order Removed",
                'detail'=>$this->user->name . " removed an order with ID: ".$order->identifier_id." from trash",
            ]);

            return response()->json([
                'success'=>true,
            ]);
        }
        return response()->json([
            'success'=>false,
            'message'=>"Sorry the order can't be found"
        ]);
    }
}
 