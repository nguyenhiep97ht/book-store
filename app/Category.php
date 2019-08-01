<?php

namespace App;
use App\Book;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $primaryKey = 'category_id';
    protected $dateFormat = 'Y-m-d H:i:s';
    protected $fillable = [
        'name'=> 'required|unique:categories|max:255', 
        'short_desc',
        'category_id'
    ];
    public function books()
    {
    	return $this->hasMany(Book::class, 'category_id');
    }
}
