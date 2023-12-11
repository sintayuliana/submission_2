<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class UserController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('welcome', compact('book'));
    }
}
