<?php

use App\Models\Product;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
// })->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/category/{category}/products', [App\Http\Controllers\HomeController::class, 'home'])->name('category.products');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('productsAll');
Route::get('/products/{category}', [App\Http\Controllers\ProductController::class, 'productsOfCategory'])->name('productsByCategory');

// Route::middleware('auth')->group(function(){

// });
Route::get('/shopping-cart', [App\Http\Controllers\CartController::class, 'index'])->name('shoppingCartShow')
        ->Middleware('auth');
Route::get('/shopping-cart/add/{id}', [App\Http\Controllers\CartController::class, 'add'])
     ->Middleware('auth')->name('shoppingCartAdd');
Route::get('/shopping-cart/remove-item/{id}', [App\Http\Controllers\CartController::class, 'removeItem'])
     ->Middleware('auth')->name('shoppingCartRemoveItem');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
