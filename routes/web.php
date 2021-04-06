<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index'])->name('home.index');
Route::get('/kategori/{slug}',[HomeController::class,'getCategory'])->name('home.category');
Route::get('/sayfa/{category}/{slug}',[HomeController::class,'getPage'])->name('home.page');
Route::get('/blog',[HomeController::class,'allBlog'])->name('home.all.blog');
Route::get('/blog/{slug}',[HomeController::class,'getBlog'])->name('home.blog');
Route::get('/iletisim',[HomeController::class,'contact'])->name('home.contact');
Route::post('/iletisim',[HomeController::class,'contactPost'])->name('home.contact.post');
Route::get('/seferler',[HomeController::class,'allTour'])->name('home.all.tour');
Route::get('/seferler/{slug}',[HomeController::class,'getTour'])->name('home.tour');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
