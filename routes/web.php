<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/contacts', function() {
    return view('contacts');
})->name('contacts');

Route::get('/price', function() {
    return view('price');
})->name('price');

Route::get('/locale/{locale}', function ($locale) {
    session(['locale'=> strtolower($locale)]);
    return back();
})->name('setLocale');
