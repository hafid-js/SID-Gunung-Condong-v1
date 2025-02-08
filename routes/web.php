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
    Route::get('form-artikel','WebController@formartikel');
    Route::get('kategori','WebController@kategori');
    Route::get('menu','WebController@menu');
    Route::get('submenu','WebController@submenu');
    Route::get('subkategori','WebController@subkategori');
    Route::get('widget','WebController@widget');
    Route::get('form-widget','WebController@formwidget');
    Route::get('komentar','WebController@komentar');
    Route::get('ubah-komentar','WebController@ubahkomentar');
    Route::get('balas-komentar','WebController@balaskomentar');
    Route::get('galeri','WebController@galeri');
    Route::get('form-galeri','WebController@formgaleri');

});




