<?php

namespace App\Providers;

use App\Models\AboutMenu;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Language;
use App\Models\Setting;
use App\Models\SocialNetwork;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer(['Front.*','Admin.*'], function ($view) {
            $lang=session()->get('language','tr');    //default deyer, lang sechilmeyibse tr
            App::setLocale($lang);
//            $allCategories=Category::with(['translations','blogs.translations'])->get();
            $allCategories = Category::with([
                'translations' => function ($query) use ($lang) {
                    $query->whereHas('language', function ($subquery) use ($lang) {
                        $subquery->where('lang', $lang);
                    });
                },
                'blogs.translations' => function ($query) use ($lang) {
                    $query->whereHas('language', function ($subquery) use ($lang) {
                        $subquery->where('lang', $lang);
                    });
                },
            ])->get();
            $blogs = Blog::with(['translations' => function ($query) use ($lang) {
                $query->whereHas('language', function ($subquery) use ($lang) {
                    $subquery->where('lang', $lang);
                });
            }])->get();
            $aboutMenu = AboutMenu::with(['translations' => function ($query) use ($lang) {
                $query->whereHas('language', function ($subquery) use ($lang) {
                    $subquery->where('lang', $lang);
                });
            }])->get();
            $socialNetworks=SocialNetwork::all();
            $setting=Setting::all();
            $languages=Language::all();
//            dd($allCategories, $lang);
            return $view->with(compact('allCategories','blogs','aboutMenu','languages','lang','socialNetworks','setting'));
        });
    }
}
