<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\MainDoctor;
use App\Models\MainDoctorTranslation;
use Illuminate\Http\Request;

class MainDoctorController extends Controller
{
    public function index()
    {
        $lang='tr';
        $main_doctor = MainDoctor::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.main-dr.main-doctor', compact('main_doctor'));
    }

    public function create()
    {
        return view ('Admin.pages.main-dr.main-doctor-add');
    }

    public function store(Request $request)
    {
        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRule["$lang.description"] = 'required';
        }
        $request->validate($validationRule);

        $main_doctor=new MainDoctor();
        $main_doctor->save();
        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId=$language->id;
            $main_doctor_translation=new MainDoctorTranslation();
            $main_doctor_translation->description=$request->input("$lang.description");
            $main_doctor_translation->main_doctor_id=$main_doctor->id;
            $main_doctor_translation->language_id=$langId;
            $main_doctor_translation->save();
        }
        return redirect()->route('main-doctor')->with('success', 'Has been added successfully!');
    }

    public function edit(MainDoctor $dr)
    {
        return view ('Admin.pages.main-dr.main-doctor-edit', compact('dr'));
    }

    public function update(Request $request)
    {

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.description"] = 'required';
        }
        $request->validate($validationRules);

        $main_doctor = MainDoctor::find($request->input('main_doctor_id'));

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            $main_doctor_translation = MainDoctorTranslation::updateOrCreate(
                ['main_doctor_id' => $main_doctor->id, 'language_id' => $langId],
                ['description' => $request->input("$lang.description")]
            );
        }
        return redirect()->route('main-doctor')->with('success', 'Has been updated successfully');
    }

    public function destroy(MainDoctor $id)
    {
        if ($id) {
            $id->translations()->delete();
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Main Doctor not found.');
        }
    }
}
