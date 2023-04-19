<?php

use App\Localization\Locale;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;

use App\Http\Controllers\RequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class, 'index'])->name('main');

Auth::routes();

Route::post('/editprofile', [HomeController::class, 'editprofile'])->name('user.editprofile');
Route::get('/about', [HomeController::class, 'about'])->name('user.about');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/test', function () {
    return view('test');
});


Route::post('/post', [App\Http\Controllers\HomeController::class, 'storTest'])->name('teststore');
Route::get('/project/{id}', [ProjectController::class, 'OneProject'])->name('project');
Route::get('/blog/{id}', [BlogController::class, 'oneBlog'])->name('blogone');
Route::post('/reqContact', [RequestController::class, 'store'])->name('reqcontact');
Route::get('/allprojects', [ProjectController::class, 'allprojects'])->name('allprojects');
Route::get('/filterLocation/{id}', [ProjectController::class, 'filterLocation'])->name('filterLocation');





Route::get('/allarticle', [BlogController::class, 'allarticle'])->name('allarticle');
Route::get('/article/{id}', [BlogController::class, 'OneArticle'])->name('article');
Route::post('/comment/{id}', [CommentController::class, 'storecomment'])->name('storecomment');

//search function
Route::post('/search', [HomeController::class, 'search'])->name('searchProperty');



Route::get('/locale/{lang}', function ($lang) {
    \Session(['locale' => $lang]);
    // App::setLocale($lang);
    // return getLang();
    // dd(App::getLocale($lang));
    return back();
})->name('set.localization');
