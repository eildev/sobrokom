<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    public function allUser(){
        $allusers = User::where('role', 'user')->get();
        return view('backend.All-Users.all-users',compact('allusers'));
    }
}
