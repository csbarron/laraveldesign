<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('pages.home');
})->name('home');

Route::get('/packages',function(){
    return view('pages.packages');
})->name('packages');

Route::get('/packages',[\App\Http\Controllers\PackagesController::class,'view'])->name('packages');

Route::get('/contact',function(){
    return view('pages.contact');
})->name('contact');

Route::get('/ldlogout',function(){
    Auth::logout();
    return redirect(route('home'));
})->name('ldlogout');
