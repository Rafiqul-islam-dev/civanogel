<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    ['prefix' => LaravelLocalization::setLocale()],
    function () {

        Route::get('/', [HomeController::class, 'home'])->name('home');



        Route::get('/property/{id}', [PropertyController::class, 'singleProperty'])->name('singleProperty');
        Route::get('/properties', [PropertyController::class, 'index'])->name('properties');

        Route::get('/page/{slug}', [PageController::class, 'single'])->name('page');
    }
);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
