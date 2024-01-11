<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // product index function
    public function index()
    {
        return view('backend.products.insert');
    }
}
