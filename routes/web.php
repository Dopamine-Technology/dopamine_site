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
    return view('template', ['page' => 'home']);
});
Route::get('/services', function () {
    return view('template', ['page' => 'services']);
});
Route::get('/about_us', function () {
    return view('template', ['page' => 'about_us']);
});
Route::get('/portfolio', function () {
    return view('template', ['page' => 'portfolio']);
});
Route::get('/blog', function () {
    return view('template', ['page' => 'blog']);
});
