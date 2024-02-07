<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutMenu;
use App\Models\AboutMenuTranslation;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//use Psy\Util\Str;

class AboutMenuController extends Controller
{
    public function index()
    {
        $lang='tr';
        $aboutMenu = AboutMenu::with(['translations' => function ($query) use ($lang) {   //teams modelin icindeki method:translations
            $query->whereHas('language', function ($subquery) use ($lang) {     //burdaki language, TeamTranslation'daki methodun adidi
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.about.aboutMenu', compact('aboutMenu'));
    }

    public function create()
    {
        return view ('Admin.pages.about.aboutmenuAdd');
    }

    public function store(Request $request)
    {
        // fields from team_translations
        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRule["$lang.title"] = 'required';
        }
        $request->validate($validationRule);
//        dd($request->all());

        $aboutMenu=new AboutMenu();
        $aboutMenu->slug = Str::slug($request->input("tr.title"));
        $aboutMenu->save();
        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
//            dd($language);
            $langId=$language->id;
            $aboutmenuTranslation=new AboutMenuTranslation(); //teamtranslation
            $aboutmenuTranslation->title=$request->input("$lang.title");
            $aboutmenuTranslation->language_id=$langId;
            $aboutmenuTranslation->about_menu_id=$aboutMenu->id;
            $aboutmenuTranslation->save();
        }
        return redirect()->route('aboutmenu')->with('success', 'Has been added successfully!');
    }

    public function edit(AboutMenu $aboutmenu)
    {
        return view ('Admin.pages.about.aboutmenuEdit', compact('aboutmenu'));
    }

    public function update(Request $request)
    {

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.title"] = 'required';
        }
        $request->validate($validationRules);
//        dd($request->all());

        $aboutmenu = AboutMenu::find($request->input('about_menu_id'));

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            // Eğer dil çevirisi zaten varsa, güncelle; yoksa oluştur
            $aboutMenuTranslation = AboutMenuTranslation::updateOrCreate(
                ['about_menu_id' => $aboutmenu->id, 'language_id' => $langId],
                ['title' => $request->input("$lang.title")]
            );
        }

        return redirect()->route('aboutmenu')->with('success', 'Has been updated successfully');
    }

    public function destroy(AboutMenu $id)
    {
        if ($id) {
            // İlgili çevirileri sil
            $id->translations()->delete();
            // Takımı sil
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'About Menu not found.');
        }
    }
}
