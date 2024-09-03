<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');     
});

//my first route
Route::get('/Bisaya', function(){
    return view('albitgwapo');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/Home-nako', function(){
    return view('laravel.About');
})->name('about');


Route::get('/Gallery-nako', function(){
    return view('laravel.Gallery');
})->name('gallery');

Route::get('/Index-nako', function(){
    return view('laravel.Index');
})->name('index');

Route::get('/Services-nako', function(){
    return view('laravel.Services');
})->name('services');

Route::get('/Calculator', function(){
    return view('laravel.calculator');
})->name('calculator');

