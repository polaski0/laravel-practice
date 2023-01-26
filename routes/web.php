
<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
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

/*
|--------------------------------------------------------------------------
| Listings
|--------------------------------------------------------------------------
*/

// Get all listing
Route::get('/', [ListingController::class, 'index']);

// Show create form
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show'])->whereNumber('listing');

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/

// Show Login form
Route::get('/login', [UserController::class, 'index']);

// Show Register/Create form
Route::get('/register', [UserController::class, 'create']);

// Create new user
Route::post('/users', [UserController::class, 'store']);

// Log user in
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log user out
Route::post('/logout', [UserController::class, 'logout']);