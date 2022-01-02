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

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
* 本の一覧表示(books.blade.php)
*/
Route::get('/', function () {
    return view('books');
});

/**
* 本を追加
*/
Route::post('/books', function (Request $request) {
    dd($request);
    // バリデーション
    $validator = Validator::make($request->all(),[
        'item_name' => 'required|max:255',
    ]);

    // バリデーションエラー
    if ($validator->fails()) {
        return redirect('/')
        ->withInput()
        ->withErrors($validator);
    }

    // Eloquent モデル（登録処理）
    $books = new Book;
    $books->item_name = $request->item_name;
    $books->item_number = '1';
    $books->item_amount = '1000';
    $books->published = '2021-01-07 00:00:00';
    $bookd->save();
    return redirect('/');
});

/**
* 本を削除
*/
Route::delete('/book/{book}', function (Book $book) {
    //
});


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
