<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $books = DB::table('books')->paginate(5);

        $categories = Category::all();
        $user = auth()->user();
        if ($user != null) {
            return view('home', ['categories' => $categories, 'books' => $books, 'username' => $user->name]);
        } else {
            return view('home', ['categories' => $categories, 'books' => $books]);
        }

    }
    public function logOut()
    {
        Auth::logOut();
        return redirect('login');
    }
    public function sortByCategory($id)
    {
        $book = null;
        //return view('home');
        if ($id != null) {
            
            $books = DB::table('books')
                ->select(DB::raw('name, price, author, short_desc'))
                ->where('category_id', '=', $id)
                ->paginate(5);
                // ->get();
        } else {
            
            $books = DB::table('books')->paginate(5);
        }
        // if(count($books) > 5){
        //     $books = $books->paginate(5);
        // }
        $categories = Category::all();
        $user = auth()->user();
        if ($user != null) {
            return view('home', ['categories' => $categories, 'books' => $books, 'username' => $user->name]);
        } else {
            return view('home', ['categories' => $categories, 'books' => $books]);
        }

    }

}
