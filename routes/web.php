<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Enduser\CartController;
use App\Http\Controllers\Enduser\SearchController;
use App\Http\Controllers\Enduser\EnduserController;
use App\Http\Controllers\Enduser\WishlistController;





// Route::get('/', function () {
//     return view('enduser.index');
// });



    Route::get('/' , [EnduserController::class, 'index']);
    Route::get('viewcategory/{slug}' , [EnduserController::class, 'viewcategory']);
    Route::get('category/{cate_slug}/{prod_slug}' , [EnduserController::class, 'viewproduct']);
    Route::get('/search', [SearchController::class, 'search']);
    Route::middleware(['auth'])->group(function () {
        Route::resource('/wishlist', WishlistController::class);
        Route::post('add-to-cart', [CartController::class, 'addProduct']);
        Route::get('cart', [CartController::class, 'viewcart']);
        Route::resource('carts', CartController::class);
    });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
