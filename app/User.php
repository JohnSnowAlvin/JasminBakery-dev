<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstName', 'lastName', 'email', 'password', 'phoneNumber', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function is_Admin()
    {
        if($this->admin){
            return true;
        }
        return false;
    }

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function returnOrder()
    {
        return $this->hasMany('App\ReturnOrder');
    }
}
