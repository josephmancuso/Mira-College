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
use App\Emails;
use App\Mail\BookOrdered;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/search', function () {
    $books = new GoogleBooks();
    
    $results = $books->limit(20)->volumes->chunk(3)->search($_GET['search']);
    return view('search', compact('results'));
});

Route::get('/book/{bookId}', function ($bookId) {
    $books = new GoogleBooks();
    $book = $books->volumes->get($bookId);
    return view('book', compact('book'));
});

Route::get('/book/register/{id}', function(){

    \Mail::to(Auth::user())->send(new BookOrdered(Auth::user()));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
