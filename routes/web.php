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
use Illuminate\Http\Request;

use App\Emails;
use App\Orders;
use App\Status;

use App\Mail\BookOrdered;

Route::get('/', function () {
    // die(phpinfo());
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/search', function () {
    $books = new GoogleBooks();
    
    $results = $books->volumes->search($_GET['search'])->chunk(3)->all();

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

Route::get('/dashboard', function(){
    $user = Auth::user();
    if (!$user->is_staff) {
        $orders = $user->getOrders();
    } else {
        $statuses = (new Status)->all();
        $orders = (new Orders)->all();
    }
    
    return view('dashboard.user', compact('orders', 'statuses'));
})->middleware('auth')->name('dashboard');

Route::post('/dashboard/order/{orderId}/status/update', function($orderId, Request $request){
    $order = Orders::find($orderId);

    $order->status = $request->input('status');

    $order->save();

    return redirect()->route('dashboard');
});

Route::post('/dashboard/order/{orderId}/dropoff', function($orderId){
    $order = Orders::find($orderId);

    $order->dropOff();

    return redirect()->route('dashboard');
});



Route::get('dashboard/{status}', function($status){
    $orders = Orders::where('status', $status)
        ->where('user_id', Auth::user()->id)->get();

    return view('dashboard.user', compact('orders'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
