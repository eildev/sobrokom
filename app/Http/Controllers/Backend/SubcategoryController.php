<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    // subcategory index function
    public function index()
    {
        return view('backend.subcategory.insert');
    }

    // subcategory store function
    public function store(Request $request)
    {

        // @dd($request->all());

        if ($request->image) {
            $request->validate([
                'categoryId' => 'required',
                'subcategoryName' => 'required|max:100',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/subcategory'), $imageName);
            $subcategory = new Subcategory;
            $subcategory->subcategoryName = $request->subcategoryName;
            $subcategory->categoryId = $request->categoryId;
            $subcategory->slug = Str::slug($request->subcategoryName);
            $subcategory->image = $imageName;
            $subcategory->save();
            return back()->with('success', 'Subcategory Successfully Saved');
        }
    }

    // subcategory View function
    public function view()
    {
        $subcategories = Subcategory::all();
        return view('backend.subcategory.view', compact('subcategories'));
    }

    // subcategory edit function 
    public function edit($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        return view('backend.subcategory.edit', compact('subcategory'));
    }

    // subcategory update function 
    public function update(Request $request, $id)
    {
        if ($request->image) {
            $request->validate([
                'categoryId' => 'required',
                'subcategoryName' => 'required|max:100',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/subcategory'), $imageName);
            $subcategory = Subcategory::findOrFail($id);
            $subcategory->subcategoryName = $request->subcategoryName;
            $subcategory->categoryId = $request->categoryId;
            $subcategory->slug = Str::slug($request->subcategoryName);
            $subcategory->image = $imageName;
            $subcategory->update();
            return redirect()->route('subcategory.view')->with('success', 'Subcategory Successfully Updated');
        }
    }

    // subcategory delete function 
    public function delete($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();
        return back()->with('success', 'Subcategory Deleted successfully');
    }
}
