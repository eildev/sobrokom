<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class WishListController extends Controller
{
    public function wishlistAdd(Request $request){
        $loved = new WishList;
        $loved->user_id = Auth::user()->id;
        $loved->product_id = $request->product_id;
        $loved->save();
        return response()->json([
            "status" => 200,
            "loved_id" => $loved->id,
            'message' => "successfully Added to your WishList",
        ]);
    }


    // WishList Delete function
    public function wishlistDelete($id) {
        $wishlist = WishList::findOrFail($id);
        $wishlist->delete();
        return back()->with('danger', 'Wishlist Successfully deleted');
    }
}
