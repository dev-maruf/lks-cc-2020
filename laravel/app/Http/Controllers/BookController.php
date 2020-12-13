<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();
        return view('book.list', compact('books'));
    }

    public function add()
    {
        return view('book.add');
    }

    public function insert(Request $request)
    {
        $book = new Book;
        $book->isbn = $request->isbn;
        $book->title = $request->title;
        $book->description = $request->description;
        $book->save();
        return redirect(route('book.list'));
    }
}
