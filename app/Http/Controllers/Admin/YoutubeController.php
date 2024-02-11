<?php

namespace App\Http\Controllers\Admin;

use App\Models\Youtubes;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rowCount = Youtubes::count();
        $yt_links=Youtubes::query()->get();
        return view ('Admin.pages.youtube.youtube', compact('yt_links','rowCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.youtube.youtubeAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRule=[
            'url' => 'required',
        ];

        $request->validate($validationRule);
//        dd($request->all());
        $youtube=new Youtubes();
        $youtube->url=$request->url;
        $youtube->save();

        return redirect()->route('youtube')->with('success', 'Has been added successfully!');
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
    public function edit(Youtubes $link)
    {
        return view ('Admin.pages.youtube.youtubeEdit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validationRule=[
            'url' => 'required'
        ];

        $request->validate($validationRule);

        $youtube = Youtubes::find($request->youtube_id);

        $youtube->url = $request->input('url');
        $youtube->save();

        return redirect()->route('youtube')->with('success', 'Has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $youtube = Youtubes::find($id);
        if ($youtube) {
            $youtube->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Sponsor not found.');
        }
    }
}
