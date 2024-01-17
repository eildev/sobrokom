<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
        // User Profile Update Function
        public function UpdateProfile(Request $request)
        {
            @dd($request->all());

        }
}
