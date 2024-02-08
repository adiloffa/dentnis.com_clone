<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\Front\MainController::class,'index'])->name('front.main');
Route::get('/about',[\App\Http\Controllers\Front\MainController::class,'about'])->name('about');
Route::get('/dr-abdulkadir-narin',[\App\Http\Controllers\Front\MainController::class,'main_dr'])->name('main-dr');
Route::get('/contact',[\App\Http\Controllers\Front\MainController::class,'contact'])->name('contact');
Route::post('/contact',[\App\Http\Controllers\Front\MainController::class,'contact_post'])->name('contact-post');
Route::get('/makaleler',[\App\Http\Controllers\Front\MainController::class,'article'])->name('articles');
Route::get('/tv-programlari',[\App\Http\Controllers\Front\MainController::class,'tvPrograms'])->name('tvprograms');
Route::get('/changeLanguage/{lang}',[\App\Http\Controllers\Front\MainController::class,'changeLang'])->name('changeLanguage');
Route::get('/search', [\App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/admin',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('admin.login');
Route::post('/admin',[\App\Http\Controllers\Admin\AdminController::class,'authenticate']);
Route::get('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('admin.logout');


Route::get('admin/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('admin/categories', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('categories');
Route::get('admin/categoryAdd', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('categoryAdd');
Route::post('admin/categoryAdd', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
Route::get('admin/categoryEdit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('categoryEdit');
Route::post('admin/categoryUpdate', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('categoryUpdate');
Route::delete('admin/categoryDelete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('categoryDelete');


Route::get('admin/blogs', [\App\Http\Controllers\Admin\BlogController::class, 'index'])->name('blogs');
Route::get('admin/blogAdd', [\App\Http\Controllers\Admin\BlogController::class, 'create'])->name('blogAdd');
Route::post('admin/blogAdd', [\App\Http\Controllers\Admin\BlogController::class, 'store']);
Route::get('admin/blogEdit/{blog}', [\App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('blogEdit');
Route::post('admin/blogUpdate', [\App\Http\Controllers\Admin\BlogController::class, 'update'])->name('blogUpdate');
Route::delete('admin/blogDelete/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('blogDelete');


Route::get('admin/slider', [\App\Http\Controllers\Admin\SliderController::class, 'index'])->name('slider');
Route::get('admin/sliderAdd', [\App\Http\Controllers\Admin\SliderController::class, 'create'])->name('sliderAdd');
Route::post('admin/sliderAdd', [\App\Http\Controllers\Admin\SliderController::class, 'store']);
Route::get('admin/sliderEdit/{slider}', [\App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('sliderEdit');
Route::post('admin/sliderUpdate', [\App\Http\Controllers\Admin\SliderController::class, 'update'])->name('sliderUpdate');
Route::delete('admin/sliderDelete/{id}', [\App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('sliderDelete');


Route::get('admin/quotes', [\App\Http\Controllers\Admin\QuoteController::class, 'index'])->name('quotes');
Route::get('admin/quoteAdd', [\App\Http\Controllers\Admin\QuoteController::class, 'create'])->name('quoteAdd');
Route::post('admin/quoteAdd', [\App\Http\Controllers\Admin\QuoteController::class, 'store']);
Route::get('admin/quoteEdit/{quote}', [\App\Http\Controllers\Admin\QuoteController::class, 'edit'])->name('quoteEdit');
Route::post('admin/quoteUpdate', [\App\Http\Controllers\Admin\QuoteController::class, 'update'])->name('quoteUpdate');
Route::delete('admin/quoteDelete/{id}', [\App\Http\Controllers\Admin\QuoteController::class, 'destroy'])->name('quoteDelete');


Route::get('admin/sponsors', [\App\Http\Controllers\Admin\SponsorController::class, 'index'])->name('sponsors');
Route::get('admin/sponsorAdd', [\App\Http\Controllers\Admin\SponsorController::class, 'create'])->name('sponsorAdd');
Route::post('admin/sponsorAdd', [\App\Http\Controllers\Admin\SponsorController::class, 'store']);
Route::get('admin/sponsorEdit/{sponsor}', [\App\Http\Controllers\Admin\SponsorController::class, 'edit'])->name('sponsorEdit');
Route::post('admin/sponsorUpdate', [\App\Http\Controllers\Admin\SponsorController::class, 'update'])->name('sponsorUpdate');
Route::delete('admin/sponsorDelete/{id}', [\App\Http\Controllers\Admin\SponsorController::class, 'destroy'])->name('sponsorDelete');


Route::get('admin/dr-images', [\App\Http\Controllers\Admin\DrImagesController::class, 'index'])->name('dr-images');
Route::get('admin/dr-images-add', [\App\Http\Controllers\Admin\DrImagesController::class, 'create'])->name('dr-images-add');
Route::post('admin/dr-images-add', [\App\Http\Controllers\Admin\DrImagesController::class, 'store']);
Route::get('admin/dr-images-edit/{dr}', [\App\Http\Controllers\Admin\DrImagesController::class, 'edit'])->name('dr-images-edit');
Route::post('admin/dr-images-update', [\App\Http\Controllers\Admin\DrImagesController::class, 'update'])->name('dr-images-update');
Route::delete('admin/dr-images-delete/{id}', [\App\Http\Controllers\Admin\DrImagesController::class, 'destroy'])->name('dr-images-delete');


Route::get('admin/teams', [\App\Http\Controllers\Admin\TeamController::class, 'index'])->name('teams');
Route::get('admin/teamAdd', [\App\Http\Controllers\Admin\TeamController::class, 'create'])->name('teamAdd');
Route::post('admin/teamAdd', [\App\Http\Controllers\Admin\TeamController::class, 'store']);
Route::get('admin/teamEdit/{team}', [\App\Http\Controllers\Admin\TeamController::class, 'edit'])->name('teamEdit');
Route::post('admin/teamUpdate', [\App\Http\Controllers\Admin\TeamController::class, 'update'])->name('teamUpdate');
Route::delete('admin/teamDelete/{id}', [\App\Http\Controllers\Admin\TeamController::class, 'destroy'])->name('teamDelete');


Route::get('admin/youtube', [\App\Http\Controllers\Admin\YoutubeController::class, 'index'])->name('youtube');
Route::get('admin/youtubeAdd', [\App\Http\Controllers\Admin\YoutubeController::class, 'create'])->name('youtubeAdd');
Route::post('admin/youtubeAdd', [\App\Http\Controllers\Admin\YoutubeController::class, 'store']);
Route::get('admin/youtubeEdit/{link}', [\App\Http\Controllers\Admin\YoutubeController::class, 'edit'])->name('youtubeEdit');
Route::post('admin/youtubeUpdate', [\App\Http\Controllers\Admin\YoutubeController::class, 'update'])->name('youtubeUpdate');
Route::delete('admin/youtubeDelete/{id}', [\App\Http\Controllers\Admin\YoutubeController::class, 'destroy'])->name('youtubeDelete');


Route::get('admin/aboutmenu', [\App\Http\Controllers\Admin\AboutMenuController::class, 'index'])->name('aboutmenu');
Route::get('admin/aboutmenuAdd', [\App\Http\Controllers\Admin\AboutMenuController::class, 'create'])->name('aboutmenuAdd');
Route::post('admin/aboutmenuAdd', [\App\Http\Controllers\Admin\AboutMenuController::class, 'store']);
Route::get('admin/aboutmenuEdit/{aboutmenu}', [\App\Http\Controllers\Admin\AboutMenuController::class, 'edit'])->name('aboutmenuEdit');
Route::post('admin/aboutmenuUpdate', [\App\Http\Controllers\Admin\AboutMenuController::class, 'update'])->name('aboutmenuUpdate');
Route::delete('admin/aboutmenuDelete/{id}', [\App\Http\Controllers\Admin\AboutMenuController::class, 'destroy'])->name('aboutmenuDelete');


Route::get('admin/social-networks', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'index'])->name('social-networks');
Route::get('admin/social-networks-add', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'create'])->name('social-network-add');
Route::post('admin/social-networks-add', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'store']);
Route::get('admin/social-networks-edit/{social}', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'edit'])->name('social-networks-edit');
Route::post('admin/social-networks-update', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'update'])->name('social-networks-update');
Route::delete('admin/social-networks-delete/{id}', [\App\Http\Controllers\Admin\SocialNetworkController::class, 'destroy'])->name('social-networks-delete');


Route::get('admin/tv-programs', [\App\Http\Controllers\Admin\TvProgramsController::class, 'index'])->name('tv-programs');
Route::get('admin/tv-programs-add', [\App\Http\Controllers\Admin\TvProgramsController::class, 'create'])->name('tv-program-add');
Route::post('admin/tv-programs-add', [\App\Http\Controllers\Admin\TvProgramsController::class, 'store']);
Route::get('admin/tv-programs-edit/{tv}', [\App\Http\Controllers\Admin\TvProgramsController::class, 'edit'])->name('tv-program-edit');
Route::post('admin/tv-programs-update', [\App\Http\Controllers\Admin\TvProgramsController::class, 'update'])->name('tv-programs-update');
Route::delete('admin/tv-programs-delete/{id}', [\App\Http\Controllers\Admin\TvProgramsController::class, 'destroy'])->name('tv-programs-delete');


Route::get('admin/settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings');
Route::get('admin/settingsAdd', [\App\Http\Controllers\Admin\SettingController::class, 'create'])->name('settingsAdd');
Route::post('admin/settingsAdd', [\App\Http\Controllers\Admin\SettingController::class, 'store']);
Route::get('admin/settingsEdit/{setting}', [\App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('settingsEdit');
Route::post('admin/settingsUpdate', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settingsUpdate');
Route::delete('admin/settingsDelete/{id}', [\App\Http\Controllers\Admin\SettingController::class, 'destroy'])->name('settingsDelete');


Route::get('admin/about-us', [\App\Http\Controllers\Admin\AboutUsController::class, 'index'])->name('about-us');
Route::get('admin/about-us-add', [\App\Http\Controllers\Admin\AboutUsController::class, 'create'])->name('about-us-add');
Route::post('admin/about-us-add', [\App\Http\Controllers\Admin\AboutUsController::class, 'store']);
Route::get('admin/about-us-edit/{about}', [\App\Http\Controllers\Admin\AboutUsController::class, 'edit'])->name('about-us-edit');
Route::post('admin/about-us-update', [\App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('about-us-update');
Route::delete('admin/about-us-delete/{id}', [\App\Http\Controllers\Admin\AboutUsController::class, 'destroy'])->name('about-us-delete');


Route::get('admin/main-doctor', [\App\Http\Controllers\Admin\MainDoctorController::class, 'index'])->name('main-doctor');
Route::get('admin/main-doctor-add', [\App\Http\Controllers\Admin\MainDoctorController::class, 'create'])->name('main-doctor-add');
Route::post('admin/main-doctor-add', [\App\Http\Controllers\Admin\MainDoctorController::class, 'store']);
Route::get('admin/main-doctor-edit/{dr}', [\App\Http\Controllers\Admin\MainDoctorController::class, 'edit'])->name('main-doctor-edit');
Route::post('admin/main-doctor-update', [\App\Http\Controllers\Admin\MainDoctorController::class, 'update'])->name('main-doctor-update');
Route::delete('admin/main-doctor-delete/{id}', [\App\Http\Controllers\Admin\MainDoctorController::class, 'destroy'])->name('main-doctor-delete');

Route::get('admin/contact-messages', [\App\Http\Controllers\Admin\AdminController::class, 'show_message'])->name('show-message');
Route::delete('admin/contact-message-delete/{id}', [\App\Http\Controllers\Admin\AdminController::class, 'delete_message'])->name('comment-delete');

Route::get('/{slug}',[\App\Http\Controllers\Front\MainController::class,'singlePage'])->name('singlePage');
