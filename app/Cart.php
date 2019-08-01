<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    protected $primaryKey = 'cart_id';
    protected $dateFormat = 'Y-m-d H:i:s';
}
