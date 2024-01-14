<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    public function store(Request $request){
        // @dd($rqst->all());
        // return response()->json([
        //     'Request' => $rqst->all()

        // ]);
        $Subscribe = new Subscribe;
        $Subscribe->email = $request->email;
        $Subscribe->save();
        return response()->json([
            'status' => 200,
            'message'=>'Subscribed Successfully'
        ]);
    }
}
