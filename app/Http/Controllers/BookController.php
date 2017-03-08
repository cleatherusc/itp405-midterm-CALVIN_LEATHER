<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class BookController extends Controller
{
    //
    public function view() {
      $books = Book::all();
      return view('books/view', ['books'=>$books]);
    }
}
