<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\FireplaceManagerController;
use App\Http\Controllers\FormController;

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
Route::get('/products/{id}', [ProductViewController::class, 'index'])->name('product_view');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/price', [PriceController::class, 'index'])->name('price');
Route::get('/fireplacemanager/vbciouersnmfs456kjh456dfg9cvbfg1445ks', [FireplaceManagerController::class, 'index'])->name('fireplacemanager');
Route::post('/fireplacemanager/vbciouersnmfs456kjh456dfg9cvbfg1445ks', [FireplaceManagerController::class, 'create'])->name('fireplacemanager.create');
Route::put('/fireplacemanager/vbciouersnmfs456kjh456dfg9cvbfg1445ks', [FireplaceManagerController::class, 'update'])->name('fireplacemanager.update');
Route::delete('/fireplacemanager/vbciouersnmfs456kjh456dfg9cvbfg1445ks', [FireplaceManagerController::class, 'delete'])->name('fireplacemanager.delete');
Route::post('/form/submit', [FormController::class, 'send'])->name('form.submit');

Route::get('/locale/{locale}', function ($locale) {
    session(['locale'=> strtolower($locale)]);
    return back();
})->name('setLocale');
