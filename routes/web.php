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
use App\Orders;

use App\Mail\BookOrdered;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/search', function () {
    $books = new GoogleBooks();
    
    $results = $books->volumes->search($_GET['search'])->chunk(3)->all();

    // dd($results);
    return view('search', compact('results'));
});

Route::get('/book/{bookId}', function ($bookId) {
    $books = new GoogleBooks();
    $book = $books->volumes->find($bookId);
    return view('book', compact('book'));
});

Route::get('/book/register/{id}', function($bookId){
    $books = new GoogleBooks();
    $book = $books->volumes->find($bookId);

    $Orders = new Orders;
    $Orders->book_id = $book->id;
    $Orders->book_isbn = '18772276';
    $Orders->user_id = Auth::user()->id;
    $Orders->status = 1;
    $Orders->save();
    \Mail::to(Auth::user())->send(new BookOrdered(Auth::user()));
    return view('book-success');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
