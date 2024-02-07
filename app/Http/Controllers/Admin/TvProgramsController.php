<?php

namespace App\Http\Controllers\Admin;

use App\Models\TvPrograms;
use Illuminate\Http\Request;

class TvProgramsController extends Controller
{
    public function index()
    {
        $TVPrograms=TvPrograms::query()->get();
        return view ('Admin.pages.TV-Programs.TVPrograms', compact('TVPrograms'));
    }

    public function create()
    {
        return view ('Admin.pages.TV-Programs.TVProgramsAdd');
    }

    public function store(Request $request)
    {
        $validationRule=[
            'title' => 'required',
            'url' => 'required'
        ];
        $request->validate($validationRule);
        $TVPrograms=new TvPrograms();  //team table'da yeni row yaratdi
        $TVPrograms->title=$request->input('title');
        $TVPrograms->url=$request->url;
        $TVPrograms->save();

        return redirect()->route('tv-programs')->with('success', 'Has been added successfully!');
    }

    public function edit(TvPrograms $tv)  //{{route('sliderEdit', ['slider'=>$slider->id])}}
    {
        return view ('Admin.pages.TV-Programs.TVProgramsEdit', compact('tv'));
    }

    public function update(Request $request)
    {
        $validationRules=[
            'title' => 'required',
            'url' => 'required'
        ];
        $request->validate($validationRules);
//        dd($request->input('title'));
        $TVPrograms = TvPrograms::find($request->tv_programs_id);
        $TVPrograms->title = $request->input('title');
        $TVPrograms->url = $request->input('url');
        $TVPrograms->save();

        return redirect()->route('tv-programs')->with('success', 'Has been updated successfully');
    }

    public function destroy(TvPrograms $id)
    {
        if ($id) {
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Team not found.');
        }
    }
}
