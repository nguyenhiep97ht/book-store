<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $primaryKey = 'role_id';
    protected $dateFormat = 'Y-m-d H:i:s';
}
