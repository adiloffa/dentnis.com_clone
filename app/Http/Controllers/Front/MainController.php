<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Admin\Controller;
use App\Models\AboutMenu;
use App\Models\AboutUs;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\DrImages;
use App\Models\MainDoctor;
use App\Models\Menu;
use App\Models\MenuBuilder;
use App\Models\Quotes;
use App\Models\Slider;
use App\Models\SocialNetwork;
use App\Models\Sponsors;
use App\Models\Team;
use App\Models\TvPrograms;
use App\Models\Youtubes;
//use http\Env\Request;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function changeLang($lang)
    {
        session()->put('language',$lang);
//        App::setLocale($lang);
//        $locale = App::currentLocale();   //bunlari appservicede yaziram deye burda gerek yoxdu
//        dd($locale);
        return redirect()->back();

    }

    public function index()
    {
        $lang = session()->get('language', 'tr');
        $sliders=Slider::all();
        $sponsors=Sponsors::all();
        $youtube=Youtubes::all();

        //aboutMenu ve blogs'u AppServiceProvidere atdim

//        $aboutMenu = AboutMenu::with(['translations' => function ($query) use ($lang) {
//            $query->whereHas('language', function ($subquery) use ($lang) {
//                $subquery->where('lang', $lang);
//            });
//        }])->get();

//        $blogs = Blog::with(['translations' => function ($query) use ($lang) {
//            $query->whereHas('language', function ($subquery) use ($lang) {
//                $subquery->where('lang', $lang);
//            });
//        }])->get();
//        $quotes=Quotes::all();
        $quotes = Quotes::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->get();
        $teams = Team::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->get();
        return view('Front.pages.main', compact('sliders','quotes','sponsors','youtube','teams'));
    }

    public function singlePage($slug)
    {
//        dd($slug);
        $lang = session()->get('language', 'tr');
        $blog = Blog::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->where('slug', $slug)->first();
//        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('Front.pages.singlePage',compact('blog'));
    }


    public function about()
    {
        $lang = session()->get('language', 'tr');
        $about_us = AboutUs::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->get();
        $dr_images = DrImages::all();
        return view('Front.pages.about', compact('about_us','dr_images'));
    }

    public function main_dr()
    {
        $lang = session()->get('language', 'tr');
        $main_dr = MainDoctor::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->get();
        $dr_images = DrImages::all();
        return view('Front.pages.main-dr', compact('main_dr','dr_images'));
    }

    public function contact()
    {
        return view('Front.pages.contact');
    }

    public function contact_post(Request $request)
    {
        $validationRules=[
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'kvkk' => 'required',
        ];

        $request->validate($validationRules);
        $contact = new Contact();
        $contact->full_name = $request->input('full_name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();

        return redirect()->route('contact')->with('success', __('Mesajınız başarıyla iletildi!'));
    }

    public function tvPrograms()
    {
        $TVPrograms=TvPrograms::all();
        return view('Front.pages.tv-programs',compact('TVPrograms'));
    }

    public function article()
    {
        $lang = session()->get('language', 'tr');
        $blogs = Blog::with(['translations' => function ($query) use ($lang) {
            $query->whereHas('language', function ($subquery) use ($lang) {
                $subquery->where('lang', $lang);
            });
        }])->get();
        return view('Front.pages.articles',compact('blogs'));
    }

}
