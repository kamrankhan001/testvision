<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('navlinks.home');
})->name('home');

Route::view('about', 'navlinks.about')->name('about');

Route::view('whyus', 'navlinks.whyus')->name('whyus');

Route::view('/bookacall', 'navlinks.contect')->name('contect');
