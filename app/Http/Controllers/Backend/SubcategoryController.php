<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    // category index function 
    public function index(){
        return view('backend.subcategory.insert');
    }

    // category store function 
    public function store(Request $request){
     
        if($request->image){
            $request->validate([
                'subcategoryName' => 'required|max:100',
                'image' => 'required|max:100',
            ]);
            $imageName = rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/category/'), $imageName);
            $subcategory = new Subcategory;
            $subcategory->categoryName = $request->subcategoryName;
            $subcategory->slug = Str::slug($request->subcategoryName);
            $subcategory->image = $imageName;
            $subcategory->save();
            return back()->with('success','Category Successfully Saved');
        }
    }

    // category View function 
    public function view(){
        $subcategories = Subcategory::all();
        return view('backend.subcategory.view', compact('subcategories'));
    }
}