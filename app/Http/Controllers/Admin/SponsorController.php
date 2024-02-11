<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors=Sponsors::query()->get();
        return view ('Admin.pages.sponsor.sponsors', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.sponsor.sponsorAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRule=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ];
        $request->validate($validationRule);
//        dd($request->all());
        $sponsor=new Sponsors();
        $sponsor->image=$request->file('image')->store('sponsors', 'public');
        $sponsor->save();

        return redirect()->route('sponsors')->with('success', 'Has been added successfully!');
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
    public function edit(Sponsors $sponsor)
    {
        return view ('Admin.pages.sponsor.sponsorEdit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $sponsor = Sponsors::find($request->sponsor_id);
        if($request->hasFile('image')) {

            if ($sponsor->image && Storage::disk('public')->exists($sponsor->image)) {
                Storage::disk('public')->delete($sponsor->image);
            }
            $sponsor->image = $request->file('image')->store('sponsors', 'public');
            $sponsor->save();
        }

        return redirect()->route('sponsors')->with('success', 'Has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sponsor = Sponsors::find($id);
        if ($sponsor) {
            if (Storage::disk('public')->exists($sponsor->image)) {
                Storage::disk('public')->delete($sponsor->image);
            }
            $sponsor->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Sponsor not found.');
        }
    }
}
