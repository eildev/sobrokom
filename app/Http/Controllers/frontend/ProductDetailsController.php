<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
class ProductDetailsController extends Controller
{
    public function productDetails($id){
        $product = Product::findOrFail($id);
        return view('frontend/e-com/product_details', compact('product'));
    }
    public function categoryWiseProduct($category){
        $category = Category::where('slug', $category)->first();
        return view('frontend/e-com/category-wise-product', compact('category'));
    }
}
