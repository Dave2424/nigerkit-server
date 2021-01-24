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
        $subscribers = Subscriber::paginate(10);
        return view('users.subscriber.index', ['subscribers' =>$subscribers]);
    }
    
    public function create(){
        return view('users.subscriber.create');
    }
    
    public function store(Request $request){
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
    

    public function edit($subscriber_id){
        $subscriber = Subscriber::findOrFail($subscriber_id);
        return view('users.subscriber.edit', compact('subscriber'));
    }
    

    public function update(Request $request,  $subscriber_id){
        $subscriber = Subscriber::findOrFail($subscriber_id);
        $subscriber->update([
            'name'=>$request['name'],
            'email'=>$request['email'],
        ]);

        return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully updated.'));
    }

    public function updateStatus($subscriber_id){
        $subscriber = Subscriber::findOrFail($subscriber_id);

        $subscriber->update([
            "status"=>$subscriber->status == 1 ? 0: 1,
        ]);

        return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully updated.'));
    }
    
    public function destroy(Subscriber  $subscriber){
        $subscriber->delete();
        return redirect()->route('subscriber.index')->withStatus(__('Subscriber successfully deleted.'));
    }
}
