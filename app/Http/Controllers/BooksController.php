<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function create()
    {
        return view('db.book_create');
    }

    public function store(Request $req)
    {

    }
}
