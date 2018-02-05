<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table='products';
    protected $fillable = [
        'name','category','price','description','tag','rating','status','photo_id'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
