<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubscriberController extends Controller{
    public $user;
    public function __construct(){
        $this->middleware('auth:admin');
        $this->user = auth('admin')->user();
    }
    
    public function index(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Subscriber") ||
            $this->user->hasPermissionTo("Update_Subscriber") ||
            $this->user->hasPermissionTo("Update_Subscriber_Status") ||
            $this->user->hasPermissionTo("Read_Subscriber") ||
            $this->user->hasPermissionTo("Delete_Subscriber")){

            $subscribers = Subscriber::paginate(10);
            return view('users.subscriber.index', ['subscribers' =>$subscribers]);
        }
        return back();
    }
    
    public function create(){
        $this->__construct();
        if($this->user->hasPermissionTo("Create_Subscriber")){
            return view('users.subscriber.create');
        }
        return back();
    }
    
    public function store(Request $request){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Subscriber")){
            $this->validate($request, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:subscribers'],
            ]);

            Subscriber::create([
                'name' => $request['name'],
                'email' => $request['email'],
            ]);

            return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully created.'));
        }
        return back();
    }
    

    public function edit($subscriber_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Subscriber")){
            $subscriber = Subscriber::findOrFail($subscriber_id);
            return view('users.subscriber.edit', compact('subscriber'));
        }
        return back();
    }
    

    public function update(Request $request,  $subscriber_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Subscriber")){
            $subscriber = Subscriber::findOrFail($subscriber_id);
            $subscriber->update([
                'name'=>$request['name'],
                'email'=>$request['email'],
            ]);

            return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully updated.'));
        }
        return back();
    }

    public function updateStatus($subscriber_id){
        $this->__construct();
        if($this->user->hasPermissionTo("Update_Subscriber_Status")){
            $subscriber = Subscriber::findOrFail($subscriber_id);

            $subscriber->update([
                "status"=>$subscriber->status == 1 ? 0: 1,
            ]);

            return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully updated.'));
        }
        return back();
    }
    
    public function destroy(Subscriber  $subscriber){
        $this->__construct();
        if($this->user->hasPermissionTo("Delete_Subscriber")){
            $subscriber->delete();
            return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully deleted.'));
        }
        return back();
    }
}
