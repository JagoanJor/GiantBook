<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Routing\Controller;

class PublisherController extends Controller
{
    public function index(){
        return view('publisher', [
            "publisher" => Publisher::all(),
            "book" => Book::all()
        ]);
    }
}
