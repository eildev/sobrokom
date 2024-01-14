<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Variant;
class ProductController extends Controller
{
    // product index function
    public function index()
    {
        return view('backend.products.insert');
    }
    public function store(Request $request){
        // dd($request->all());
        $product = new Product;
        if($request->product_image){
            $productImage = rand() . '.' . $request->product_image->extension();
            $request->product_image->move(public_path('uploads/products/'), $productImage);

            $product->category_id = $request->category_id;
            $product->subcategory_id = $request->subcategory_id;
            $product->brand_id = $request->brand_id;
            $product->product_feature = $request->product_feature;
            $product->product_name = $request->product_name;
            $product->short_desc = $request->short_desc;
            $product->long_desc = $request->long_desc;
            $product->product_image = $productImage;
            $product->sku = $request->sku;
            $product->tags = $request->tag;
            $product->save();
            if($request->imageGallery){
                $imagesGallery = $request->imageGallery;
                foreach ($imagesGallery as $image) {
                    $galleryImage = rand() . '.' . $image->extension();
                    $image->move(public_path('uploads/products/gallery'), $galleryImage);
                    $productGallery = new ProductGallery;
                    $productGallery->product_id = $product->id;
                    $productGallery->image = $galleryImage;
                    $productGallery->save();
                }
            }
            return response()->json([
                'status' => '200',
                'message' => 'Product saved successfully',
                'productId' => $product->id,
            ]);
        }
        
        
    }

    public function variantStore(Request $request){
        $variant = new Variant;
        $variant->regular_price	= $request->regular_price;
        $variant->discount	= $request->discount;
        $variant->discount_amount	= $request->discount_amount;
        $variant->stock_quantity	= $request->stock_quantity;
        $variant->barcode	= $request->barcode;
        $variant->color	= $request->color;
        $variant->size	= $request->size;
        $variant->product_id	= $request->product_id;
        $variant->save();
        return response()->json([
            'status' => '200',
            'message' => 'variant saved successfully',
            
        ]);

    }

    public function variantShow ($id){
        $variant = Variant::where('product_id', $id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'variant saved successfully',
            'variantData' => $variant,
        ]);
    }
}