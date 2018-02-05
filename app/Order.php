<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table='orders';
    protected $fillable = [
        'orderID','userID', 'cartRowID', 'itemID', 'itemName', 'qty', 'price','subtotal','returnOrder'
    ];
}
