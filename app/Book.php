<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $primaryKey = 'book_id';
    protected $dateFormat = 'Y-m-d H:i:s';

    protected $fillable = [
        'short_desc',
        'price',
        'author',
        'amount',
        'name'=> 'required|unique:books|max:255',
        'category_id'

    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
