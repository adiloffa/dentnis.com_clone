<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\Controller;
use App\Models\Blog;
use App\Models\BlogTranslation;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SearchController extends Controller
{
    //
    public function search(Request $request)
    {

        $query = $request->input('query');
        $locale = session()->get('language','tr');
//        dd(session());
        $results = BlogTranslation::with('blog')->whereHas('language', function ($query) use ($locale) {
            $query->where('lang', $locale);
        })->where('description', 'like', '%' . $query . '%')->get();

//        dd($results);
        $count = $results->count();

        return view('Front.pages.search', compact('results', 'count'));
    }

}
