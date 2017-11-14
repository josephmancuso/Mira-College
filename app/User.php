<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Emails;
Use App\Orders;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getSchool()
    {
        return Emails::where('email', explode('@',$this->email)[1])->first()->schools;
    }

    public function getOrders()
    {
        return Orders::where('user_id', $this->id)->get();
    }
}
