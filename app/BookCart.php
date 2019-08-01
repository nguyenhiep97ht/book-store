<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCart extends Model
{
    //
    protected $table = 'book_cart';
    protected $primaryKey = 'book_cart_id';
    protected $dateFormat = 'Y-m-d H:i:s';
}
