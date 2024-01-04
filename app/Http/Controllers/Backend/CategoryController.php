<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    public function index(){
        return view('backend.category.insert');
    }
    public function store(Request $request){
     
        if($request->image){
            $imageName = rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/category/'), $imageName);
            $category = new Category;
            $category->categoryName = $request->categoryName;
            $category->slug = Str::slug($request->categoryName);
            $category->image = $imageName;
            $category->save();
            return back()->with('success','Category Successfully Saved');
        }

    }
}
