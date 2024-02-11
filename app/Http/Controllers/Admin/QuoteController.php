<?php

namespace App\Http\Controllers\Admin;

use App\Models\Language;
use App\Models\Quotes;
use App\Models\QuotesTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rowCount = Quotes::count();
//        dd($rowCount);
        $lang='tr';
        $quotes = Quotes::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', "$lang");
            });
        }])->get();

        return view ('Admin.pages.quote.quotes', compact('quotes','rowCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Admin.pages.quote.quoteAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationRules=[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',   //input'un name='image'
        ];

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.title"] = 'required';
            $validationRules["$lang.description"] = 'required';
        }
        $request->validate($validationRules);

        $quote=new Quotes();
        $quote->image=$request->file('image')->store('quotes', 'public');
        $quote->save();

        foreach ($langs as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId=$language->id;

            $quoteTranslation=new QuotesTranslation();
            $quoteTranslation->title=$request->input("$lang.title");
            $quoteTranslation->description=$request->input("$lang.description");
            $quoteTranslation->quote_id=$quote->id;
            $quoteTranslation->language_id=$langId;
            $quoteTranslation->save();
        }
        return redirect()->route('quotes')->with('success', 'Has been added successfully!');
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
    public function edit(Quotes $quote)
    {
        return view ('Admin.pages.quote.quoteEdit', compact('quote'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $langs = config('app.languages');
        foreach ($langs as $lang) {
            $validationRules["$lang.title"] = 'required';
            $validationRules["$lang.description"] = 'required';
        }
        $request->validate($validationRules);

        $quote = Quotes::find($request->input('quote_id'));

        if ($request->hasFile('image')) {
            $quote->image = $request->file('image')->store('quotes', 'public');
        }

        $quote->save();

        foreach (config('app.languages') as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;
            $quoteTranslation = QuotesTranslation::updateOrCreate(
                ['quote_id' => $quote->id, 'language_id' => $langId],
                ['title' => $request->input("$lang.title"),
                'description' => $request->input("$lang.description")]
            );
        }

        return redirect()->route('quotes')->with('success', 'Has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quotes $id)
    {
        if ($id) {
            $id->translations()->delete();
            if (Storage::disk('public')->exists($id->image)) {
                Storage::disk('public')->delete($id->image);
            }
            $id->delete();

            return redirect()->back()->with('success', 'Has been deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Quote not found.');
        }
    }
}
