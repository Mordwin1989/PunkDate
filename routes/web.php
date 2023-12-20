<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing on create
// store - Store new listing
// edit - Show form to edit listing 
// update - Update listing
// destroy - Delete listing

//all listings
Route::get('/', [ListingController::class, 'index']);

//create
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Create Data
// submit form data to this route & call the store method
Route::post('/listings', [ListingController::class, 'store']);

//single listing keep below
Route::get('/listings/{listing}', [ListingController::class, 'show']);
