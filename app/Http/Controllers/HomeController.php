<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;
use App\User;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Book $book)
    {   
        

        $books = Book::whereHas('users', function($q) {
            $user_id = Auth()->id();
            $q->where('user_id', $user_id);
        })
        ->get();
        
        return view('/home', compact('books'));
    }


}
