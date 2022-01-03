<?php

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

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
* 本の一覧表示(books.blade.php)
*/

Route::get('/', 'App\Http\Controllers\BooksController@index');

/**
 * 本を登録
 */
Route::post('/books', 'App\Http\Controllers\BooksController@store');

//更新画面
Route::post('/booksedit/{books}', 'App\Http\Controllers\BooksController@edit');

//更新処理
Route::post('/books/update','App\Http\Controllers\BooksController@update');

/**
* 本を削除
*/
Route::delete('/book/{book}','App\Http\Controllers\BooksController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
