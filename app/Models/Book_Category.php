<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'bookCategory_id';

    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
