<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function orders()
    {
        $orders=Orders::allorders();
        return view('orders',['orders'=>$orders]);
    }

    public function show($id)
    {
        $orders=Orders::where('order_id', $id)->get();
//        dd($orders->toArray());
        return view('show_order', ['orders'=>$orders]);

    }
}
