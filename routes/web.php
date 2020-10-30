<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowProfile;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BookListController;

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

// Route::get('/book/{name}', function ($name) {
//     return view('book', ["name" => $name]);
// });

Route::view('addbook','book');
Route::post('addbook',[BooksController::class,'insertData']);
Route::get('list',[BookListController::class,'getData']);
Route::get('delete/{id}',[BookListController::class,'delete']);
Route::get('edit/{id}',[BookListController::class,'showData']);
Route::post('edit',[BookListController::class,'updateData']);
 
