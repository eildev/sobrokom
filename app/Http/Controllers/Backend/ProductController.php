<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Variant;
use Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // product index function
    public function index()
    {
        return view('backend.products.insert');
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'product_feature' => 'required',
            'product_name' => 'required|max:100',
            'short_desc' => 'required|max:150',
            'long_desc' => 'required|max:200',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'sku' => 'required',
            'shipping' => 'required',
            // 'tags' => 'required',
        ]);

        if ($validator->passes()) {
            $product = new Product;
            if ($request->product_image) {
                $productImage = rand() . '.' . $request->product_image->extension();
                $request->product_image->move(public_path('uploads/products/'), $productImage);

                $product->category_id = $request->category_id;
                $product->subcategory_id = $request->subcategory_id;
                $product->brand_id = $request->brand_id;
                $product->product_feature = implode(',', $request->product_feature);
                $product->product_name = $request->product_name;
                $product->slug = Str::slug($request->product_name);
                $product->short_desc = $request->short_desc;
                $product->long_desc = $request->long_desc;
                $product->product_image = $productImage;
                $product->sku = $request->sku;
                $product->tags = $request->tag;
                $product->shipping = $request->shipping;
                $product->save();
                if ($request->imageGallery) {
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
        return response()->json([
            'status' => '500',
            'error' => $validator->messages()
        ]);
    }

    public function variantStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'regular_price' => 'required|numeric',
            'discount' => 'required|numeric',
            'discount_amount' => 'required|numeric',
            'stock_quantity' => 'required|numeric',
            'unit' => 'required|max:50',
        ]);

        if($validator->passes()){
            $variant = new Variant;
            $variant->regular_price    = $request->regular_price;
            $variant->discount    = $request->discount;
            $variant->discount_amount    = $request->discount_amount;
            $variant->stock_quantity    = $request->stock_quantity;
            $variant->barcode    = $request->barcode;
            $variant->color    = $request->color;
            $variant->size    = $request->size;
            $variant->unit    = $request->unit;
            $variant->expire_date    = $request->expire_date;
            $variant->manufacture_date    = $request->manufacture_date;
            $variant->product_id    = $request->product_id;
            $variant->save();
            return response()->json([
                'status' => '200',
                'message' => 'variant saved successfully',
    
            ]);
        }
        return response()->json([
            'status' => '500',
            'error' => $validator->messages()
        ]);
        
    }

    public function variantShow($id)
    {
        $variant = Variant::where('product_id', $id)->get();
        return response()->json([
            'status' => '200',
            'message' => 'variant saved successfully',
            'variantData' => $variant,
        ]);
    }


    public function view()
    {
        $products = Product::all();
        return view('backend.products.view', compact('products'));
    }

    public function deleteVariant($id)
    {
        $variant = Variant::findOrFail($id);
        $variant->delete();
        return back()->with('success', 'Variant Delete Successfully');
    }


    public function viewDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.view_details', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('product'));
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        unlink(public_path('uploads/products/').$product->product_image);
        $product->delete();
        return redirect()->route('product.view')->with('success', 'Product deleted successfully');
    }
}