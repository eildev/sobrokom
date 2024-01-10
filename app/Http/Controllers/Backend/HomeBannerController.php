<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageGallery;
use App\Models\HomeBanner;

class HomeBannerController extends Controller
{
    // banner index function
    public function index()
    {
        return view('backend.home_banner.insert');
    }

    // banner store function
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'short_description' => 'required|max:100',
            'long_description' => 'required|max:200',
            'link' => 'required|max:200',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->image) {
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/banner/'), $imageName);
            $banner = new HomeBanner;
            $banner->title = $request->title;
            $banner->short_description = $request->short_description;
            $banner->long_description = $request->long_description;
            $banner->link = $request->link;
            $banner->image = $imageName;
            $banner->save();
            if($request->galleryimages){
                $allImages = $request->galleryimages;
                foreach($allImages as $galleryImage){
                    $imageName = rand() . '.' . $galleryImage->extension();
                    $galleryImage->move(public_path('uploads/banner/gallery/'), $imageName);
                    $ImageGallery = new ImageGallery;
                    $ImageGallery->banner_id = $banner->id;
                    $ImageGallery->image = $imageName;
                    $ImageGallery->save();
                }
            }



            return back()->with('success', 'banner Successfully Saved');
        }
       
    }

    // banner View function
    public function view()
    {
        $categories = banner::all();
        return view('backend.home_banner.view', compact('categories'));
    }

    // banner Edit function
    public function edit($id)
    {
        $banner = banner::findOrFail($id);
        return view('backend.home_banner.edit', compact('banner'));
    }


    // banner update function
    public function update(Request $request, $id)
    {
        if ($request->image) {
            $request->validate([
                'title' => 'required|max:50',
                'short_description' => 'required|max:100',
                'long_description' => 'required|max:200',
                'link' => 'required|max:200',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $imageName = rand() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/banner/'), $imageName);
            $banner = HomeBanner::findOrFail($id);
            unlink(public_path('uploads/banner/').$banner->image);
            $banner->bannerName = $request->bannerName;
            $banner->slug = Str::slug($request->bannerName);
            $banner->image = $imageName;
            $banner->update();
            return redirect()->route('banner.view')->with('success', 'banner Successfully updated');
        }
        else {
            $request->validate([
                'bannerName' => 'required|max:100',
            ]);
            $banner = banner::findOrFail($id);
            $banner->bannerName = $request->bannerName;
            $banner->slug = Str::slug($request->bannerName);
            $banner->update();
            return redirect()->route('banner.view')->with('success', 'banner Successfully updated');
        }
    }
    // banner Delete function
    public function delete($id)
    {
        $banner = banner::findOrFail($id);
        unlink(public_path('uploads/banner/').$banner->image);
        $banner->delete();
        return back()->with('success', 'banner Successfully deleted');
    }
}