<?php

namespace App\Http\Controllers\Admin;

use App\Models\DrImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DrImagesController extends Controller
{
    public function index()
    {
        $dr_images=DrImages::query()->get();
        return view ('Admin.pages.dr-images.dr-images', compact('dr_images'));
    }

    public function create()
    {
        return view ('Admin.pages.dr-images.dr-images-add');
    }

    public function store(Request $request)
    {
        $validationRule=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];

        $request->validate($validationRule);
//        dd($request->all());
        $dr_image=new DrImages();
        $dr_image->image=$request->file('image')->store('dr-images', 'public');    //yuxaridaki validateRule icindeki img ile eynidi    //storage->app->public folder yaradir
        $dr_image->save();

        return redirect()->route('dr-images')->with('success', 'Has been added successfully!');
    }

    public function edit(DrImages $dr)
    {
        return view ('Admin.pages.dr-images.dr-images-edit', compact('dr'));
    }

    public function update(Request $request)
    {
        $dr_image = DrImages::find($request->dr_image_id);
        if($request->hasFile('image')) {

            if ($dr_image->image && Storage::disk('public')->exists($dr_image->image)) {
                Storage::disk('public')->delete($dr_image->image);
            }
            $dr_image->image = $request->file('image')->store('dr-images', 'public');
            $dr_image->save();
        }
        return redirect()->route('dr-images')->with('success', 'Has been updated successfully');
    }

    public function destroy(string $id)
    {
        $dr_image = DrImages::find($id);
        if ($dr_image) {
            if (Storage::disk('public')->exists($dr_image->image)) {
                Storage::disk('public')->delete($dr_image->image);
            }
            $dr_image->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Dr Image not found.');
        }
    }
}
