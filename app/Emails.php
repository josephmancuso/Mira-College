<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $table = 'emails';

    public function schools()
    {
        return $this->belongsTo('App\Schools', 'id');
    }
}
