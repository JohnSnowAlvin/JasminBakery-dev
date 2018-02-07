<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnOrder extends Model
{
    public $table = "rOrder";
    protected $fillable = [
        'rIName','qty','user_id','product_id'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
