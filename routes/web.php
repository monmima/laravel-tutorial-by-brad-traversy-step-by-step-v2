<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

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
//     return view('welcome');
// });

// // returning a string
// Route::get('/hello', function () {
//     return "hello";
// });

// // returning html and a 200 status code
// Route::get('/hello-2', function () {
//     return response("<h1>hello</h1>");
// });

// // returning html and a 404 status code
// Route::get('/hello-3', function () {
//     return response("<h1>hello</h1>", 404);
// });

// // returning html as plain text, a 404 status code and a header
// Route::get('/hello-4', function () {
//     return response("<h1>hello</h1>", 200)
//     ->header("Content-Type", "Text/plain");
// });

// // returning a custom header
// Route::get('/hello-5', function () {
//     return response("<h1>hello</h1>", 200)
//     ->header("foo", "bar");
// });

// // handling wildcards
// Route::get('/hello-6/{id}', function ($id) {
//     return response("Post $id.");
// });

// // handling wildcards and using a constraint
// // 404 for something else than a number
// Route::get('/hello-7/{id}', function ($id) {
//     return response("Post $id.");
// })->where("id", "[0-9]+"); 

// // handling request parameters
// // http://localhost:8000/mysearch?name=brad&city=boston
// // you need to import this for this route to work: use Illuminate\Http\Request;
// Route::get('/mysearch', function (Request $request) {
//     // dd($request);
//     // dd("$request->name $request->city");

//     return "$request->name $request->city";
// });

// // returning JSON
// Route::get("/posts", function() {
//     return response()->json([
//         "posts" => 
//         [
//             "title" => "Post 1"
//         ]
//     ]);
// });

// basic view
// Route::get('/', function () {
//     return view('listings');
// });

// single listing
// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         "listing" => Listing::find($id)
//     ]);
// });

// single listing + handling non-existent IDs
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             "listing" => Listing::find($id)
//         ]);
//     } else {
//         abort("404");
//     }
// });

// all listings
Route::get('/', [ListingController::class, "index"]);

// show create form
Route::get('/listings/create', [ListingController::class, "create"]);

// store listing data
Route::post('/listings', [ListingController::class, "store"]);

// show edit form
Route::get("/listings/{listing}/edit", [ListingController::class, "edit"]);

// update form
Route::put("/listings/{listing}", [ListingController::class, "update"]);

// single listing; watch out! this route has to be at the bottom!
Route::get('/listings/{listing}', [ListingController::class, "show"]);






