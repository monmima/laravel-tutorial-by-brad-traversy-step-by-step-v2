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

// returning a string
Route::get('/hello', function () {
    return "hello";
});

// returning html and a 200 status code
Route::get('/hello-2', function () {
    return response("<h1>hello</h1>");
});