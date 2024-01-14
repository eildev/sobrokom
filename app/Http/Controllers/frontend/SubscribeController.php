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
    public function view(){
        // @dd($rqst->all());
        // return response()->json([
        //     'Request' => $rqst->all()

        // ]);
        $subscribers = Subscribe::all();
        return view('backend.subscribe.view', compact('subscribers'));
    }
    public function destroy($id){

        $subscriber = Subscribe::findOrFail($id);
        $subscriber->delete();
        return back()->with('success', 'Category Successfully deleted');
    }
}
