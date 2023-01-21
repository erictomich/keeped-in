<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\ListController;

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

Route::get('/my-bookmarks/{tag?}', [BookmarkController::class, 'index'])->name('bookmarks');

Route::get('/create-bookmark', function() {
    return view('bookmarks/create-bookmark');
});

Route::post('/my-bookmarks', [BookmarkController::class, 'create']);

Route::get('/my-lists', [ListController::class, 'index'])->name('lists');