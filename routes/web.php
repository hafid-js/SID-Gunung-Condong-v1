<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GrupController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    "verify" => true
]);

Route::get('/dashboard', function () {
    return view('admin.layout.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/man_user', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/grup', [GrupController::class, 'index'])->name('grup.index');
    Route::get('/grup/viewForm', [GrupController::class, 'view'])->name('grup.view');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
