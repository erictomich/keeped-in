<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookmarkController;

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

Route::get('/my-bookmarks', [BookmarkController::class, 'index']);

Route::get('/create-bookmark', function() {
    return view('bookmarks/create-bookmark');
});

Route::post('/my-bookmarks', [BookmarkController::class, 'show']);