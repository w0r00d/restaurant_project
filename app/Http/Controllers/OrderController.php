<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Termwind\Components\Raw;
use App\Models\Order;

class OrderController extends Controller
{
    //

    function store(Request $request){

        $order = new Order;
        $order->restaurant_id = $request->restaurant_id;
        $order->user_id = Auth::user()->id;
        $order->order_details = $request->details;
        $order->order_type = $request->type;
        $order->order_status = 1;
        $order->order_time = date('Y-m-d H:i:s');
        $order->order_total = rand(5000,20000);
        $order->save();

        return redirect('get-order');
    }

    function getOrders(){

        $user = Auth::user()->id;

        $orders = Order::where('user_id',$user)->get();

        return view('myorders', ['orders' => $orders]);
    }
}
