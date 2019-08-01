<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $primaryKey = 'order_id';
    protected $dateFormat = 'Y-m-d H:i:s';
}
