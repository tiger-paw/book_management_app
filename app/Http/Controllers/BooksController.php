<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function create()
    {
        return view('db.create');
    }

    public function store(Request $req)
    {

    }

    public function cancel()
    {
        return view();
    }
}
