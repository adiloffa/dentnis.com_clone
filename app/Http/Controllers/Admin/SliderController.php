<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders=Slider::query()->get();
        return view ('Admin.pages.slider.slider', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.slider.sliderAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRule=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,svg|max:2048',
        ];

        $request->validate($validationRule);
        $slider=new Slider();
        $slider->image=$request->file('image')->store('slider', 'public');
        $slider->save();

        return redirect()->route('slider')->with('success', 'Has been added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)  //{{route('sliderEdit', ['slider'=>$slider->id])}}
    {
        return view ('Admin.pages.slider.sliderEdit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validationRule=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,svg|max:2048',
        ];

        $request->validate($validationRule);
//        dd($request->all());

        $slider = Slider::find($request->slider_id);
        if($request->hasFile('image')) {

            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }

            $slider->image = $request->file('image')->store('slider','public');
            $slider->save();
        }

        return redirect()->route('slider')->with('success', 'Has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        if ($slider) {
            if (Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $slider->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Slider not found.');
        }
    }
}
