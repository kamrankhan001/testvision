<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('navlinks.home');
})->name('home');

Route::view('about', 'navlinks.about')->name('about');
