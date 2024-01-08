<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    // category index function
    public function index(){
        return view('backend.category.insert');
    }

    // category store function
    public function store(Request $request){

        // @dd($request->all());

        // $imageName = rand().'.'.$request->image->extension();
        // $request->image->move(public_path('uploads/category/'), $imageName);

        if($request->image){
            $request->validate([
                'categoryName' => 'required|max:100',
                'image' => 'required|max:100',
            ]);
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

    // category View function
    public function view(){
        $categories = Category::all();
        return view('backend.category.view', compact('categories'));
    }

    // category Edit function
    public function edit($id){
        $category = Category::findOrFail($id);
        return view('backend.category.edit', compact('category'));
    }


    // category update function
    public function update(Request $request, $id){
        // if($request->image){
        //     $imageName = rand().'.'.$request->image->extension();
        //     $request->image->move(public_path('uploads/category/'), $imageName);
        //     $category = Category::findOrFail($id);
        //     $category->categoryName = $request->categoryName;
        //     $category->slug = Str::slug($request->categoryName);
        //     $category->image = $imageName;
        //     $category->update();
        //     return back()->with('success','Category Successfully updated');
        // }

        $category = Category::findOrFail($id);
            $category->categoryName = $request->categoryName;
            $category->slug = Str::slug($request->categoryName);
            $category->image = $request->image;
            $category->update();
            return redirect()->route('category.view')->with('success','Category Successfully updated');
    }


    // category Delete function
    public function delete($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return back()->with('success','Category Successfully deleted');
    }

}
