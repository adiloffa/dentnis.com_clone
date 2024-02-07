<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\Language;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lang='tr';
        $categories = Category::with(['translations' => function ($query) use ($lang) {   //teams modelin icindeki method:translations
            $query->whereHas('language', function ($subquery) use ($lang) {     //burdaki language, TeamTranslation'daki methodun adidi
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.category.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.category.categoryAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // fields from team_translations
        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRule["$lang.name"] = 'required';
        }
        $request->validate($validationRule);
//        dd($request->all());

        $category=new Category();
        $category->save();
        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
//            dd($language);
            $langId=$language->id;
            $categoryTranslation=new CategoryTranslation(); //teamtranslation
            $categoryTranslation->name=$request->input("$lang.name");
            $categoryTranslation->category_id=$category->id;
            $categoryTranslation->language_id=$langId;
            $categoryTranslation->save();
        }
        return redirect()->route('categories')->with('success', 'Has been added successfully!');
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
    public function edit(Category $category)
    {
        return view ('Admin.pages.category.categoryEdit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.name"] = 'required';
        }
        $request->validate($validationRules);
//        dd($request->all());

        $category = Category::find($request->input('category_id'));
//        $category->save();

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            // Eğer dil çevirisi zaten varsa, güncelle; yoksa oluştur
            $categoryTranslation = CategoryTranslation::updateOrCreate(
                ['category_id' => $category->id, 'language_id' => $langId],
                ['name' => $request->input("$lang.name")]
            );
        }

        return redirect()->route('categories')->with('success', 'Has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $id)
    {
        if ($id) {
            // İlgili çevirileri sil
            $id->translations()->delete();
            // Takımı sil
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Team not found.');
        }
    }
}
