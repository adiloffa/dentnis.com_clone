<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use App\Models\AboutUsTranslation;
use App\Models\Language;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $lang='tr';
        $about_us = AboutUs::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.about.aboutUs', compact('about_us'));
    }

    public function create()
    {
        return view ('Admin.pages.about.aboutUsAdd');
    }

    public function store(Request $request)
    {
        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRule["$lang.description"] = 'required';
        }
        $request->validate($validationRule);
//        dd($request->all());

        $about_us=new AboutUs();
        $about_us->save();
        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
//            dd($language);
            $langId=$language->id;
            $about_us_translation=new AboutUsTranslation();
            $about_us_translation->description=$request->input("$lang.description");
            $about_us_translation->about_us_id=$about_us->id;
            $about_us_translation->language_id=$langId;
            $about_us_translation->save();
        }
        return redirect()->route('about-us')->with('success', 'Has been added successfully!');
    }

    public function edit(AboutUs $about)
    {
        return view ('Admin.pages.about.aboutUsEdit', compact('about'));
    }

    public function update(Request $request)
    {

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.description"] = 'required';
        }
        $request->validate($validationRules);
//        dd($request->all());

        $about_us = AboutUs::find($request->input('about_us_id'));

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            $about_us_translation = AboutUsTranslation::updateOrCreate(
                ['about_us_id' => $about_us->id, 'language_id' => $langId],
                ['description' => $request->input("$lang.description")]
            );
        }
        return redirect()->route('about-us')->with('success', 'Has been updated successfully');
    }

    public function destroy(AboutUs $id)
    {
        if ($id) {
            $id->translations()->delete();
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'About Us not found.');
        }
    }
}
