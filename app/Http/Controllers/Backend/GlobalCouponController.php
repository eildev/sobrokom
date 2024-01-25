<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlobalCouponController extends Controller
{
   // tagname index function
   public function index()
   {
       return view('backend.global_coupons.insert');
   }
}
