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
        $request->validate([
            'product_id' => 'required',
            'regular_price' => 'required',
            'discount' => 'required',
            'discount_amount' => 'required',
            'quantity' => 'required',
            'unit' => 'required',
            'weight' => 'required',
            'company_id' => 'required',
            'purchase_date' => 'required',
            'unit_price' => 'required',
            'total_price' => 'required',
            'vehicle_cost' => 'required',
            'grand_total' => 'required',
            'payment_method' => 'required',
            'payable_amount' => 'required',
            'due' => 'required',
        ]);
        $variantId = $request->variant_id;
        if (!empty($variantId)) {
            Variant::findOrFail($variantId)->update([
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
        } else {
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
        }
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
    public function edit($id)
    {
        $data = PurchaseDetails::findOrFail($id);

        return view('backend.purchase-details.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $purchase = PurchaseDetails::findOrFail($id);
        Variant::where('id', $purchase->variant_id)->update([
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
        PurchaseDetails::findOrFail($id)->update([
            'company_id' => $request->company_name,
            'product_id' => $request->product_id,
            'variant_id' => $purchase->variant_id,
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
        return redirect()->route('purchase.view')->with('success', 'Purchase Successfully Updated');
    }

    public function delete($id)
    {
        PurchaseDetails::findOrFail($id)->delete();
        return back()->with('success', 'Purchase Details successfully Deleted');
    }
}
