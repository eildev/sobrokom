<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillingController extends Controller
{
    public function insert(Request $request)
    {
        $billing = new Billing;
        $billing->user_id = Auth::user()->id;
        $billing->first_name = $request->first_name;
        $billing->last_name = $request->last_name;
        $billing->email = $request->email;
        $billing->phone = $request->phone;
        $billing->address_1 = $request->address_1;
        $billing->address_2 = $request->address_2;
        $billing->city = $request->city;
        $billing->division = $request->division;
        $billing->post_code = $request->post_code;
        $billing->country = $request->country;
        $billing->order_notes = $request->order_notes;
        $billing->save();

        return response()->json([
            'status' => 200,
            'message' => 'Add Billing Address Successfully'
        ]);
    }
}
