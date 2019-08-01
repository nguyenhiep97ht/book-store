<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;

class BookAPIController extends Controller
{
    //
    public function fake()
    {
        for ($i = 0; $i <= 20; $i++) {
            $book = new Book;
            $book->name = "Book " . $i;
            $book->amount = rand(10, 50);
            $book->author = "Author " . $i;
            $book->price = rand(50, 200);
            $book->short_desc = "Short desc " . $i;
            $categories = Category::all();
            $categories = $categories->toArray();
            shuffle($categories);
            $book->category_id = $categories[0]['category_id'];
            $book->save();
            print_r($book);

        }

    }

}
