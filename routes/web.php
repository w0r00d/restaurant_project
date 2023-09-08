<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\booksController;
use App\http\Controllers\restaurantController;
use App\http\Controllers\OrderController;
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
    return view('welcome');
});




Route::get('/lists', function () {
    return view('lists');
})->name('lists');

Route::get('/addNewReview', function () {
    return view('review-livewire');
})->name('add-review');

Route::get('/make-order', function () {
    return view('add-order');
})->name('make-order');


Route::get('/addNewRestaurant', function () {
    return view('restaurant-add');
})->name('addNewRestaurant');

Route::get('/searchRestaurants', function () {
    return view('restaurants-search');
})->name('searchRestaurants');

Route::get('/addRestaurant', function () {
    return view('new-restaurant');
});

Route::post('store-order', [OrderController::class, 'store']);

Route::get('get-order', [OrderController::class, 'getOrders'])->name('myOrders');


Route::post('store-form', [restaurantController::class, 'store']);

Route::get('get-reviews', [restaurantController::class, 'getReviews'])->name('get-reviews');

Route::get('/books', function () {
    return view('all-books');
})->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
