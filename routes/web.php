<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\WebController;

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



Route::namespace('App\Http\Controllers\Admin')->group(function() {
    Route::get('/',[DashboardController::class,'index']);


    // menu pengaturan web
    Route::get('artikel','WebController@artikel');
    Route::get('artikel/form','WebController@formartikel');
    Route::get('kategori','WebController@kategori');
    Route::get('menu','WebController@menu');
    Route::get('menu/sub','WebController@submenu');
    Route::get('kategori/sub','WebController@subkategori');
    Route::get('widget','WebController@widget');
    Route::get('widget/form','WebController@formwidget');
    Route::get('komentar','WebController@komentar');
    Route::get('komentar/form','WebController@ubahkomentar');
    Route::get('komentar/balas','WebController@balaskomentar');
    Route::get('galeri','WebController@galeri');
    Route::get('galeri/form','WebController@formgaleri');
    Route::get('galeri/sub','WebController@subgaleri');
    Route::get('sosmed','WebController@sosmed');
    Route::get('sosmed/form','WebController@formsosmed');
    Route::get('slider','WebController@slider');
});




