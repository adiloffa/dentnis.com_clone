<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Team;
use App\Models\TeamTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lang='tr';
        $teams = Team::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.team.teams', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.team.teamAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRules=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'name' => 'required'
        ];

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.position"] = 'required';
        }
        $request->validate($validationRules);
//        dd($request->all());
        $team=new Team();  //team table'da yeni row yaratdi
        $team->image=$request->file('image')->store('team_profiles', 'public');
        $team->title=$request->input('name');
        $team->save();

        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
//            dd($language);
            $langId=$language->id;

            $teamTranslation=new TeamTranslation();
            $teamTranslation->position=$request->input("$lang.position");
            $teamTranslation->teams_id=$team->id;
            $teamTranslation->language_id=$langId;
            $teamTranslation->save();
        }
        return redirect()->route('teams')->with('success', 'Has been added successfully!');
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
//    public function edit(string $id)
    public function edit(Team $team)
    {
//        dd($team);
        return view ('Admin.pages.team.teamEdit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validationRules=[
            'name' => 'required'
        ];

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.position"] = 'required';
        }
        $request->validate($validationRules);
//        dd($request->all());

        $team = Team::find($request->input('team_id'));

        if ($request->hasFile('image')) {
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }
            $team->image = $request->file('image')->store('team_profiles', 'public');
        }

        $team->title = $request->input('name');
        $team->save();

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            $teamTranslation = TeamTranslation::updateOrCreate(
                ['teams_id' => $team->id, 'language_id' => $langId],
                ['position' => $request->input("$lang.position")]
            );
        }

        return redirect()->route('teams')->with('success', 'Has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $id)
    {
        if ($id) {
            $id->translations()->delete();
            if (Storage::disk('public')->exists($id->image)) {
                Storage::disk('public')->delete($id->image);
            }
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Team not found.');
        }
    }
}
