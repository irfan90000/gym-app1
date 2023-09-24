<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = Order::with(['product','user'])->get();
        return response()->json($order);
    }
}
