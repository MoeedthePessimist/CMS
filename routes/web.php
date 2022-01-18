<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AdminController;


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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', [LandingController::class, 'index']);

Route::get('/redirects', [UserController::class, 'redirects']);

Route::get('/about', function() {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/dash', [AdminController::class, 'getAdminDash']);

Route::get('/requests', [AdminController::class, 'getRequests']);

Route::get('/items-list', [AdminController::class, 'getItems']);

Route::get('/add-items', [AdminController::class, 'addItems']);

Route::post('/uploadProduct', [AdminController::class, 'upload']);

Route::get('/deleteProduct/{id}', [AdminController::class, 'delete']);

Route::get('/shop', [UserController::class, 'viewShop']);

Route::get('/viewProduct/{id}', [UserController::class, 'viewProduct']);


Route::post('/uploadReview', [UserController::class, 'upload']);

// Route::post('/addReview', [UserController::class, 'addReview']);

Route::get('/addCart/{prodid}/{userid}', [UserController::class, 'addToCart']);

Route::get('/viewCart/{userId}', [UserController::class, 'viewCart']);

Route::get('/removeCart/{id}', [UserController::class, 'deleteFromCart']);

Route::post('/postOrder', [UserController::class, 'addOrder']);

Route::get('/confirmOrder/{id}', [AdminController::class, 'deleteReq']);

Route::post('/postFeedback', [UserController::class, 'addFeedback']);

Route::get('/deleteFeedback{id}', [AdminController::class, 'deleteFeedback']);