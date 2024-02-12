<?php

namespace App\Http\Controllers\Admin;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SocialNetworkController extends Controller
{
    public function index()
    {
        $socialNetworks=SocialNetwork::query()->get();
        return view ('Admin.pages.social-networks.socialNetworks', compact('socialNetworks'));
    }

    public function create()
    {
        return view ('Admin.pages.social-networks.socialNetworkAdd');
    }

    public function store(Request $request)
    {
        $validationRule=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,svg|max:2048',
            'url' => 'required'
        ];

        $request->validate($validationRule);
        $socialNetwork=new SocialNetwork();
        $socialNetwork->image=$request->file('image')->store('social-network', 'public');
        $socialNetwork->url=$request->url;
        $socialNetwork->save();

        return redirect()->route('social-networks')->with('success', 'Has been added successfully!');
    }

    public function edit(SocialNetwork $social)
    {
        return view ('Admin.pages.social-networks.socialNetworkEdit', compact('social'));
    }

    public function update(Request $request)
    {
        $validationRule=[
            'url' => 'required'
        ];

        $request->validate($validationRule);

        $socialNetwork = SocialNetwork::find($request->social_network_id);
        if($request->hasFile('image')) {

            if ($socialNetwork->image && Storage::disk('public')->exists($socialNetwork->image)) {
                Storage::disk('public')->delete($socialNetwork->image);
            }
            $socialNetwork->image = $request->file('image')->store('social-network', 'public');
        }
        $socialNetwork->url = $request->input('url');
        $socialNetwork->save();

        return redirect()->route('social-networks')->with('success', 'Has been updated successfully');
    }

    public function destroy(string $id)
    {
        $socialNetwork = SocialNetwork::find($id);
        if ($socialNetwork) {
            if (Storage::disk('public')->exists($socialNetwork->image)) {
                Storage::disk('public')->delete($socialNetwork->image);
            }
            $socialNetwork->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Social Network not found.');
        }
    }
}
