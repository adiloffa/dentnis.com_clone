<?php
//
//use Illuminate\Support\Facades\Route;
//
//
////Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index']);
//Route::get('/',[\App\Http\Controllers\Admin\AdminController::class,'index']);
//Route::get('/login',[\App\Http\Controllers\Admin\AdminController::class,'login'])->name('admin.login');
////Route::post('/login',[\App\Http\Controllers\Admin\AdminController::class,'authenticate']);
//
//
//Route::get('/categories',[\App\Http\Controllers\Admin\CategoryController::class,'index'])->name('categories');
////Route::get('/categoryAdd',[\App\Http\Controllers\Admin\CategoryController::class,'create'])->name('categoryAdd');
////Route::post('/categoryAdd',[\App\Http\Controllers\Admin\CategoryController::class,'store']);
////Route::get('/categoryEdit/{category}',[\App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('categoryEdit');
////Route::post('/categoryUpdate',[\App\Http\Controllers\Admin\CategoryController::class,'update'])->name('categoryUpdate');
////Route::delete('/categoryDelete/{id}',[\App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('categoryDelete');
////
////
////Route::get('/blogs',[\App\Http\Controllers\Admin\BlogController::class,'index'])->name('blogs');
////Route::get('/blogAdd',[\App\Http\Controllers\Admin\BlogController::class,'create'])->name('blogAdd');
////Route::post('/blogAdd',[\App\Http\Controllers\Admin\BlogController::class,'store']);
////Route::get('/blogEdit/{blog}',[\App\Http\Controllers\Admin\BlogController::class,'edit'])->name('blogEdit');
////Route::post('/blogUpdate',[\App\Http\Controllers\Admin\BlogController::class,'update'])->name('blogUpdate');
////Route::delete('/blogDelete/{id}',[\App\Http\Controllers\Admin\BlogController::class,'destroy'])->name('blogDelete');
////
////
////Route::get('/slider',[\App\Http\Controllers\Admin\SliderController::class,'index'])->name('slider');
////Route::get('/sliderAdd',[\App\Http\Controllers\Admin\SliderController::class,'create'])->name('sliderAdd');
////Route::post('/sliderAdd',[\App\Http\Controllers\Admin\SliderController::class,'store']);
////Route::get('/sliderEdit/{slider}',[\App\Http\Controllers\Admin\SliderController::class,'edit'])->name('sliderEdit');
////Route::post('/sliderUpdate',[\App\Http\Controllers\Admin\SliderController::class,'update'])->name('sliderUpdate');
////Route::delete('/sliderDelete/{id}',[\App\Http\Controllers\Admin\SliderController::class,'destroy'])->name('sliderDelete');
////
////
////Route::get('/quotes',[\App\Http\Controllers\Admin\QuoteController::class,'index'])->name('quotes');
////Route::get('/quoteAdd',[\App\Http\Controllers\Admin\QuoteController::class,'create'])->name('quoteAdd');
////Route::post('/quoteAdd',[\App\Http\Controllers\Admin\QuoteController::class,'store']);
////Route::get('/quoteEdit/{quote}',[\App\Http\Controllers\Admin\QuoteController::class,'edit'])->name('quoteEdit');
////Route::post('/quoteUpdate',[\App\Http\Controllers\Admin\QuoteController::class,'update'])->name('quoteUpdate');
////Route::delete('/quoteDelete/{id}',[\App\Http\Controllers\Admin\QuoteController::class,'destroy'])->name('quoteDelete');
////
////
////Route::get('/sponsors',[\App\Http\Controllers\Admin\SponsorController::class,'index'])->name('sponsors');
////Route::get('/sponsorAdd',[\App\Http\Controllers\Admin\SponsorController::class,'create'])->name('sponsorAdd');
////Route::post('/sponsorAdd',[\App\Http\Controllers\Admin\SponsorController::class,'store']);
////Route::get('/sponsorEdit/{sponsor}',[\App\Http\Controllers\Admin\SponsorController::class,'edit'])->name('sponsorEdit');
////Route::post('/sponsorUpdate',[\App\Http\Controllers\Admin\SponsorController::class,'update'])->name('sponsorUpdate');
////Route::delete('/sponsorDelete/{id}',[\App\Http\Controllers\Admin\SponsorController::class,'destroy'])->name('sponsorDelete');
////
////
////Route::get('/dr-images',[\App\Http\Controllers\Admin\DrImagesController::class,'index'])->name('dr-images');
////Route::get('/dr-images-add',[\App\Http\Controllers\Admin\DrImagesController::class,'create'])->name('dr-images-add');
////Route::post('/dr-images-add',[\App\Http\Controllers\Admin\DrImagesController::class,'store']);
////Route::get('/dr-images-edit/{dr}',[\App\Http\Controllers\Admin\DrImagesController::class,'edit'])->name('dr-images-edit');
////Route::post('/dr-images-update',[\App\Http\Controllers\Admin\DrImagesController::class,'update'])->name('dr-images-update');
////Route::delete('/dr-images-delete/{id}',[\App\Http\Controllers\Admin\DrImagesController::class,'destroy'])->name('dr-images-delete');
////
////
////Route::get('/teams',[\App\Http\Controllers\Admin\TeamController::class,'index'])->name('teams');
////Route::get('/teamAdd',[\App\Http\Controllers\Admin\TeamController::class,'create'])->name('teamAdd');
////Route::post('/teamAdd',[\App\Http\Controllers\Admin\TeamController::class,'store']);
////Route::get('/teamEdit/{team}',[\App\Http\Controllers\Admin\TeamController::class,'edit'])->name('teamEdit');
////Route::post('/teamUpdate',[\App\Http\Controllers\Admin\TeamController::class,'update'])->name('teamUpdate');
////Route::delete('/teamDelete/{id}',[\App\Http\Controllers\Admin\TeamController::class,'destroy'])->name('teamDelete');
////
////
////Route::get('/youtube',[\App\Http\Controllers\Admin\YoutubeController::class,'index'])->name('youtube');
////Route::get('/youtubeAdd',[\App\Http\Controllers\Admin\YoutubeController::class,'create'])->name('youtubeAdd');
////Route::post('/youtubeAdd',[\App\Http\Controllers\Admin\YoutubeController::class,'store']);
////Route::get('/youtubeEdit/{link}',[\App\Http\Controllers\Admin\YoutubeController::class,'edit'])->name('youtubeEdit');
////Route::post('/youtubeUpdate',[\App\Http\Controllers\Admin\YoutubeController::class,'update'])->name('youtubeUpdate');
////Route::delete('/youtubeDelete/{id}',[\App\Http\Controllers\Admin\YoutubeController::class,'destroy'])->name('youtubeDelete');
////
////
////Route::get('/aboutmenu',[\App\Http\Controllers\Admin\AboutMenuController::class,'index'])->name('aboutmenu');
////Route::get('/aboutmenuAdd',[\App\Http\Controllers\Admin\AboutMenuController::class,'create'])->name('aboutmenuAdd');
////Route::post('/aboutmenuAdd',[\App\Http\Controllers\Admin\AboutMenuController::class,'store']);
////Route::get('/aboutmenuEdit/{aboutmenu}',[\App\Http\Controllers\Admin\AboutMenuController::class,'edit'])->name('aboutmenuEdit');
////Route::post('/aboutmenuUpdate',[\App\Http\Controllers\Admin\AboutMenuController::class,'update'])->name('aboutmenuUpdate');
////Route::delete('/aboutmenuDelete/{id}',[\App\Http\Controllers\Admin\AboutMenuController::class,'destroy'])->name('aboutmenuDelete');
////
////
////Route::get('/social-networks',[\App\Http\Controllers\Admin\SocialNetworkController::class,'index'])->name('social-networks');
////Route::get('/social-networks-add',[\App\Http\Controllers\Admin\SocialNetworkController::class,'create'])->name('social-network-add');
////Route::post('/social-networks-add',[\App\Http\Controllers\Admin\SocialNetworkController::class,'store']);
////Route::get('/social-networks-edit/{social}',[\App\Http\Controllers\Admin\SocialNetworkController::class,'edit'])->name('social-networks-edit');
////Route::post('/social-networks-update',[\App\Http\Controllers\Admin\SocialNetworkController::class,'update'])->name('social-networks-update');
////Route::delete('/social-networks-delete/{id}',[\App\Http\Controllers\Admin\SocialNetworkController::class,'destroy'])->name('social-networks-delete');
////
////
////Route::get('/tv-programs',[\App\Http\Controllers\Admin\TvProgramsController::class,'index'])->name('tv-programs');
////Route::get('/tv-programs-add',[\App\Http\Controllers\Admin\TvProgramsController::class,'create'])->name('tv-program-add');
////Route::post('/tv-programs-add',[\App\Http\Controllers\Admin\TvProgramsController::class,'store']);
////Route::get('/tv-programs-edit/{tv}',[\App\Http\Controllers\Admin\TvProgramsController::class,'edit'])->name('tv-program-edit');
////Route::post('/tv-programs-update',[\App\Http\Controllers\Admin\TvProgramsController::class,'update'])->name('tv-programs-update');
////Route::delete('/tv-programs-delete/{id}',[\App\Http\Controllers\Admin\TvProgramsController::class,'destroy'])->name('tv-programs-delete');
////
////
////Route::get('/settings',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('settings');
////Route::get('/settingsAdd',[\App\Http\Controllers\Admin\SettingController::class,'create'])->name('settingsAdd');
////Route::post('/settingsAdd',[\App\Http\Controllers\Admin\SettingController::class,'store']);
////Route::get('/settingsEdit/{setting}',[\App\Http\Controllers\Admin\SettingController::class,'edit'])->name('settingsEdit');
////Route::post('/settingsUpdate',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('settingsUpdate');
////Route::delete('/settingsDelete/{id}',[\App\Http\Controllers\Admin\SettingController::class,'destroy'])->name('settingsDelete');
////
////
////Route::get('/about-us',[\App\Http\Controllers\Admin\AboutUsController::class,'index'])->name('about-us');
////Route::get('/about-us-add',[\App\Http\Controllers\Admin\AboutUsController::class,'create'])->name('about-us-add');
////Route::post('/about-us-add',[\App\Http\Controllers\Admin\AboutUsController::class,'store']);
////Route::get('/about-us-edit/{about}',[\App\Http\Controllers\Admin\AboutUsController::class,'edit'])->name('about-us-edit');
////Route::post('/about-us-update',[\App\Http\Controllers\Admin\AboutUsController::class,'update'])->name('about-us-update');
////Route::delete('/about-us-delete/{id}',[\App\Http\Controllers\Admin\AboutUsController::class,'destroy'])->name('about-us-delete');
////
////
////Route::get('/main-doctor',[\App\Http\Controllers\Admin\MainDoctorController::class,'index'])->name('main-doctor');
////Route::get('/main-doctor-add',[\App\Http\Controllers\Admin\MainDoctorController::class,'create'])->name('main-doctor-add');
////Route::post('/main-doctor-add',[\App\Http\Controllers\Admin\MainDoctorController::class,'store']);
////Route::get('/main-doctor-edit/{dr}',[\App\Http\Controllers\Admin\MainDoctorController::class,'edit'])->name('main-doctor-edit');
////Route::post('/main-doctor-update',[\App\Http\Controllers\Admin\MainDoctorController::class,'update'])->name('main-doctor-update');
////Route::delete('/main-doctor-delete/{id}',[\App\Http\Controllers\Admin\MainDoctorController::class,'destroy'])->name('main-doctor-delete');
