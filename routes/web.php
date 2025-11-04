<?php

use App\Http\Controllers\MandatoryDisclosureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', fn() => view('home'))->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/mandatory', [MandatoryDisclosureController::class, 'index'])->name('mandatory.index');
Route::get('/contact', fn() => view('contact'))->name('contact');

