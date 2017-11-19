<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Scriptotek\GoogleBooks\GoogleBooks;

use App\Status;

class Orders extends Model
{
    protected $table = "orders";
    public $book_information;

    public function statuses()
    {
        return $this->belongsTo('App\Status', 'status');
    }

    public function fetchBookInformation()
    {
        return $this->book_information = (new GoogleBooks(['key' => getenv('GOOGLE_BOOKS_KEY')]))->volumes->find($this->book_id);
    } 

    public function dropOff()
    {
        $pickup = Status::where('status', 'Ready for Pickup')->first();

        $this->status = $pickup->id;

        return $this->save();
    }
}
