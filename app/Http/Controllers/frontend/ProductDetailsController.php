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
    public function SearchbyProduct(Request $request){
        $searchTag = $request->search;
        $products = Product::where('product_name', 'like', '%'.$request->search.'%')
        ->orWhere('short_desc', 'like', '%'.$request->search.'%')
        ->orWhere('tags', 'like', '%'.$request->search.'%')
        ->paginate(12);
        return view('frontend/e-com/product-search', compact('products','searchTag'));
    }
    public function subcategoryWiseProduct($subcategoryslug){
        $subcategory = Subcategory::where('slug', $subcategoryslug)->first();
        return view('frontend/e-com/subcategory-wise-product', compact('subcategory'));
    }
    public function brandWiseProduct($brandslug){
        $brand = Brand::where('slug', $brandslug)->first();
        return view('frontend/e-com/brand-wise-product', compact('brand'));
    }
    public function allFeatureProduct(){
        $features = Product::where('status', 1)
        ->where('product_feature', 'like', '%weekend-deals%')
        ->orWhere('product_feature', 'like', '%feature%')
        ->orWhere('product_feature', 'like', '%new-arrival%')
        ->orWhere('product_feature', 'like', '%trending%')
        ->orWhere('product_feature', 'like', '%best-rate%')
        ->orWhere('product_feature', 'like', '%top-seller%')
        ->orWhere('product_feature', 'like', '%top-offers%')
        ->orderBy('id', 'ASC')
        ->paginate(12);
        return view('frontend/e-com/all-feature-product', compact('features'));
    }
}