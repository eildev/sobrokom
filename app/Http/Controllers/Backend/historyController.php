<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class historyController extends Controller
{
    public function CurrentHistory($value){
        $yearlyData = Order::whereYear('created_at', 2024)
        ->get();

        return response()->json([
            'data' => $yearlyData
        ]);
    }
}
