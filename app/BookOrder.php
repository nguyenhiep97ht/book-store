<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookOrder extends Model
{
    //
    protected $table = 'book_order';
    protected $primaryKey = 'book_order_id';
    protected $dateFormat = 'Y-m-d H:i:s';
}
