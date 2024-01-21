<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function productDetails($id){
        $product = Product::findOrFail($id);
        return view('frontend/e-com/product_details', compact('product'));
    }
}
