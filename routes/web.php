<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublisherController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/book/{book_id}', [IndexController::class, 'show']);

Route::get('/publisher', [PublisherController::class, 'index']);

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category/{cat_id}', [CategoryController::class, 'show']);