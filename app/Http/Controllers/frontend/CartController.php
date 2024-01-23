<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller
{

    public function addToCart(Request $request){
        // @dd($request->all());
        $product = Product::findOrFail($request->product_id);
        Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'qty' => 1,
            'price' => $request->selling_price,
            'weight' =>0,
            'options' => [
                'image' => $product->product_image,
            ]
        ]);
        return response()->json([
            'status' => 200,
            'message' => 'Product added successfully',
            'cartData' => Cart::content()
        ]);

    }



    public function showCart()
    {
        $products = Cart::content();
        return response()->json([
            'status' => '200',
            'cartData' => $products,
        ]);
    }

    public function showCartProducts()
    {
        $products = Cart::content();
        return view('frontend.e-com.cart', compact('products'));
    }

    // public function removeCartProduct(Request $request, $id)
    // {
    //     $rowId = $id;
    //     $products = Cart::remove($rowId);
    //     return response()->json([
    //         'status' => '200',
    //         'message' => 'Product Remove successfully',
    //     ]);
    // }
}
