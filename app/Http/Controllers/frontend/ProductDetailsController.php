<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
class ProductDetailsController extends Controller
{
    public function productDetails($slug){
        $product = Product::where('slug', $slug)->first();
        return view('frontend/e-com/product_details', compact('product'));
    }
    public function categoryWiseProduct($categoryslug){
        $category = Category::where('slug', $categoryslug)->first();
        return view('frontend/e-com/category-wise-product', compact('category'));
    }
    public function subcategoryWiseProduct($subcategoryslug){
        $subcategory = Subcategory::where('slug', $subcategoryslug)->first();
        return view('frontend/e-com/subcategory-wise-product', compact('subcategory'));
    }
    public function brandWiseProduct($brandslug){
        $brand = Brand::where('slug', $brandslug)->first();
        return view('frontend/e-com/brand-wise-product', compact('brand'));
    }
}
