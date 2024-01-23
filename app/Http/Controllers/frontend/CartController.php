<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{

    public function addToCart(Request $request){
        @dd($rqst->all());
        // return response()->json([
        //     'Request' => $rqst->all()

        // ]);

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
