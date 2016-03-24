<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('welcome', compact('books'));
    }

    public function showinfo(Book $book)
    {
        return view('bookinfo', compact('book'));
    }
}
