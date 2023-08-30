<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index', [
            "index" => Book::all()
        ]);
    }

    public function show($book_id){
        return view('book', [
            "book" => Book::find($book_id),
            "publisher" => Publisher::all()
        ]);
    }
}
