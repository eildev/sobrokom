<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductDetailsController extends Controller
{
    public function productDetails($slug){
        $product = Product::where('slug', $slug)->first();
        return view('frontend/e-com/product_details', compact('product'));
    }
    public function categoryWiseProduct($category){
        $product = Category::where('slug', $category);
        return view('frontend/e-com/product_details', compact('product'));
    }
}
