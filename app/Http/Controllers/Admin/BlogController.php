<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogTranslation;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lang='tr';
        $blogs = Blog::with([
            'translations' => function ($query) use ($lang) {
                $query->whereHas('language', function ($subquery) use ($lang) {
                    $subquery->where('lang', $lang);
                });
            },
            'category.translations' => function ($query) use ($lang) {
                $query->whereHas('language', function ($subquery) use ($lang) {
                    $subquery->where('lang', $lang);
                });
            }
        ])->get();
//        dd($blogs);

        return view ('Admin.pages.blog.blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Category::with('translations')->get();
//        dd($categories);
        return view('Admin.pages.blog.blogAdd', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $languages = config('app.languages');
        $validationRules = [
            'image' => 'required|image|mimes:jpeg,webp,png,jpg,gif,svg|max:2048',
            "category" => 'required'
        ];

        foreach ($languages as $lang) {
            $validationRules["$lang.title"] = 'required|string|max:255';
            $validationRules["$lang.description"] = 'required|string';
        }
        $request->validate($validationRules);
        $slug= Str::slug($request->input('tr.title'));

//        dd($request->all());
//        dd($slug);

        $blog = new Blog();
        $blog->image = $request->file('image')->store('blog_images', 'public');
        $blog->slug = $slug;
        $blog->category_id = $request->input('category');


        $blog->save();

        foreach ($languages as $lang) {

            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;
            BlogTranslation::create([
                'blog_id' => $blog->id,
                'language_id' => $langId,
                'title' => $request->input("$lang.title"),
                'description' => $request->input("$lang.description"),
            ]);
        }
        return redirect()->route('blogs', ['lang' => 'en'])->with('success', 'Has been created successfully');
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
    public function edit(Blog  $blog)
    {
        return view('Admin.pages.blog.blogEdit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $languages = config('app.languages');
        $validationRules = [
            "category" => 'required'
        ];

        foreach ($languages as $lang) {
            $validationRules["$lang.title"] = 'required|string|max:255';
            $validationRules["$lang.description"] = 'required|string';
        }
        $request->validate($validationRules);
//        dd('request',$request->all());

        $blog = Blog::find($request->input('blog_id'));

        // Eğer yeni kayıt ise dosyayı kaydet
        if ($request->hasFile('image')) {
            if (Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);

            }
            $blog->image = $request->file('image')->store('blog_images', 'public');
        }

        $slug= Str::slug($request->input('tr.title'));

        $blog->slug = $slug;
        $blog->category_id = $request->input('category');
        $blog->save();

        foreach ($languages as $lang) {
            $language = Language::where('lang', $lang)->first();
            $langId = $language->id;

            BlogTranslation::updateOrCreate([
                'blog_id' => $blog->id,
                'language_id' => $langId,
            ], [
                'title' => $request->input("$lang.title"),
                'description' => $request->input("$lang.description"),
            ]);
        }

        return redirect()->route('blogs', ['lang' => 'en'])->with('success', 'Has been updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $id)
    {
        if ($id) {
            $id->translations()->delete();

            if (Storage::disk('public')->exists($id->image)) {
                Storage::disk('public')->delete($id->image);

            }
            $id->delete();

            return redirect()->back()->with('success', 'Blog deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Blog not found.');
        }
    }
}
