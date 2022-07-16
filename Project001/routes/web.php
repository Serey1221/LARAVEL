<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
//All listing
Route::get('/', function () {
    return view('listings', [
        'header' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});
//single listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/welcome', function () {
//     return response('<h1>Welcome to my homepage</h1>', 200)
//         ->header('Content-Type', 'text/plain')
//         ->header('X-Header-One', 'Header Value');
// });
// Route::get('/posts/{id}', function ($id) {
//     // dd($id); dd= Die Dumo Helpers
//     return response('Post id is :' . $id);
// })->where('id', '[0-9]+');
// Route::get('/search', function (Request $request) {
//     return ($request->name . ' ' . $request->city);
// });
