<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PurchaseDetails;
use App\Models\Variant;
use Illuminate\Http\Request;

class PurchaseDetailsController extends Controller
{
    public function index()
    {
        return view('backend.purchase-details.insert');
    }
    public function store(Request $request)
    {
        // dd($request);
        // $request->validate([
        //     'heading' => 'required|max:50',
        //     'title' => 'required|max:50',
        //     'short_description' => 'required|max:100',
        //     'link' => 'required|max:200',
        // ]);
        $variantId = Variant::insertGetId([
            'product_id' => $request->product_id,
            'color' => $request->color,
            'size' => $request->size,
            'regular_price' => $request->regular_price,
            'discount' => $request->discount,
            'discount_amount' => $request->discount_amount,
            'stock_quantity' => $request->quantity,
            'unit' => $request->unit,
            'weight' => $request->weight,
            'expire_date' => $request->expire_date,
            'manufacture_date' => $request->manufacture_date,

        ]);
        PurchaseDetails::insert([
            'company_id' => $request->company_name,
            'product_id' => $request->product_id,
            'variant_id' => $variantId,
            'purchase_date' => $request->purchase_date,
            'quantity' => $request->quantity,
            'unit_price' => $request->unit_price,
            'total_price' => $request->total_price,
            'vehicle_cost' => $request->vehicle_cost,
            'other_cost' => $request->other_cost,
            'grand_total' => $request->grand_total,
            'payment_method' => $request->payment_method,
            'payable_amount' => $request->payable_amount,
            'due' => $request->due,
            'remarks' => $request->remarks,
        ]);

        return back()->with('success', 'Product Purchase Added');
    }

    public function view()
    {
        $allData = PurchaseDetails::all();
        return view('backend.purchase-details.view', compact('allData'));
    }
    public function getData()
    {
        $allData = PurchaseDetails::all();
        return response()->json([
            'status' => 200,
            'allData' => $allData
        ]);
    }
}
