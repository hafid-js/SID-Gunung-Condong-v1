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
    Route::get('form','WebController@form');
    Route::get('kategori','WebController@kategori');
    Route::get('menu','WebController@menu');
    Route::get('subkategori','WebController@subkategori');
    Route::get('widget','WebController@widget');

});




