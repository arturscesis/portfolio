<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/bitbox', function (){
    return view('bitbox');
})->name('bitbox.info');

Route::get('/scraper', function (){
    return view('scraper');
})->name('webscraper.info');

Route::get('/unity', function (){
    return view('unity');
})->name('unity.info');
