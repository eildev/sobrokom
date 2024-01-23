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

        

        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|string|lowercase|email|max:255'
        //     ]);
        //     if ($validator->passes()) {
        //         $Subscribe = new Subscribe;
        //         $Subscribe->email = $request->email;
        //         $Subscribe->save();

        //         return response()->json([
        //             'status' => 200,
        //             'message'=>'Subscribed Successfully'
        //         ]);

        //     }
        //     return response()->json([
        //         'status' => '500',
        //         'error'=>$validator->messages()
        //     ]);

    }
}
