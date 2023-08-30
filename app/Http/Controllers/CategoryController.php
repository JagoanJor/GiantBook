<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Book_Category;
use App\Models\Category;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function show($cat_id){
        return view('category', [
            "category" => Category::find($cat_id),
            "bookCategory" => Book_Category::all(),
            "book" => Book::all()
        ]);
    }
}
