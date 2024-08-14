<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Testimoni;
use App\Models\Profile;

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

Route::get('/', function () {
    $gallery = Gallery::latest()->limit(3)->get();
    $news = News::latest()->limit(3)->get();
    $testimoni = Testimoni::latest()->limit(3)->get();
    $profile = Profile::first();
    return view('index', compact('gallery', 'news', 'testimoni', 'profile'));
});

Route::get('/index', [LandingController::class, 'index'])->name('landing.index');
Route::get('/visi-misi', [LandingController::class, 'visi'])->name('landing.visi');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/news-atricle', [LandingController::class, 'news'])->name('landing.news');
Route::get('/news-atricle/query/', [LandingController::class, 'news_search'])->name('landing.news.search');
Route::get('/news-atricle/detail/{slug}', [LandingController::class, 'detail_news'])->name('landing.news.detail');
Route::get('/history', [LandingController::class, 'history'])->name('landing.history');
Route::get('/gallery-images', [LandingController::class, 'gallery'])->name('landing.gallery');
Route::get('/contact-us', [LandingController::class, 'contact'])->name('landing.contact');
Route::get('/online-service', [LandingController::class, 'online'])->name('landing.online');
Route::get('/public-service', [LandingController::class, 'public'])->name('landing.public');
Route::get('/legalisir-ijazah', [LandingController::class, 'legalisir'])->name('landing.legalisir');
Route::get('/sertifikat-akreditasi', [LandingController::class, 'akreeditasi'])->name('landing.akreditasi');
Route::get('/academics', [LandingController::class, 'academic'])->name('landing.academic');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/news', App\Http\Controllers\NewsController::class);
Route::resource('/gallery', App\Http\Controllers\GalleryController::class);
Route::resource('/testimoni', App\Http\Controllers\TestimoniController::class);
Route::resource('/profile', App\Http\Controllers\ProfileController::class);
Route::post('/profile/updateName', [App\Http\Controllers\ProfileController::class, 'updateName'])->name('profile.updateName');
Route::post('/profile/updateMotto', [App\Http\Controllers\ProfileController::class, 'updateMotto'])->name('profile.updateMotto');
Route::resource('/academic', App\Http\Controllers\AcademicController::class);
