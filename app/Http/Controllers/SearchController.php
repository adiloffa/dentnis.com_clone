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
        $results = BlogTranslation::whereHas('language', function ($query) use ($locale) {
            $query->where('lang', $locale);
        })->where('description', 'like', '%' . $query . '%')->get();

//        dd($results);
        $count = $results->count();

//        if ($count === 0) {
//            $message = 'Arama sonucu bulunamadı.';
//        } else {
//            $message = __('Arama sonucu: ') . $count;
//        }
//        $message = $count === 0 ? __('Arama sonucu bulunamadı.') : __('Arama sonucu:', ['count' => $count]);

        return view('Front.pages.search', compact('results', 'count'));
    }

}
