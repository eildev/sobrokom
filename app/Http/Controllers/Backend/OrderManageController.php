<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderManageController extends Controller
{
    public function index(){
        $newOrders = Order::where("status", 'pending')->latest()->get();
        return view('backend.order.new-order', compact('newOrders'));
    }
}