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

use Scriptotek\GoogleBooks\GoogleBooks;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/search', function () {
    $books = new GoogleBooks(['maxResults' => 20]);
    
    $results = $books->volumes->search($_GET['search']);
    return view('search', compact('results'));
});

Route::get('/book/{bookId}', function ($bookId) {
    $books = new GoogleBooks();
    $book = $books->volumes->get($bookId);
    return view('book', compact('book'));
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
