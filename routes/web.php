<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{property_type}/{listing_type}', function () {
    return view('welcome');
});

Route::get('/show-all-listings', function() {
    return view('show-all-listings');
});

Route::get('/listing/{id}', function () {
    return view('single-property');
});

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('welcome');
});

Route::get('/account/saved', function () {
    return view('welcome');
});

Route::get('/account/showing-status', function () {
    return view('welcome');
});