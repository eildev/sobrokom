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

    public function orderTracking(Request $request){
        $searchTag = $request->search;
        $orderTacking = Order::where('invoice_number', $request->search)->where('status', 'approve')
        ->get();
        return view('frontend/e-com/tracking-product', compact('orderTacking','searchTag'));
    }
}