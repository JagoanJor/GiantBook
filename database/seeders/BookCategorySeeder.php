<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bCategory = [
            ['book_id' => '1', 'category_id' => '2'],
            ['book_id' => '2', 'category_id' => '2'],
            ['book_id' => '3', 'category_id' => '2'],
            ['book_id' => '4', 'category_id' => '1'],
            ['book_id' => '4', 'category_id' => '2'],
            ['book_id' => '5', 'category_id' => '1'],
            ['book_id' => '5', 'category_id' => '2'],
            ['book_id' => '6', 'category_id' => '1'],
            ['book_id' => '6', 'category_id' => '2'],
            ['book_id' => '7', 'category_id' => '1'],
            ['book_id' => '7', 'category_id' => '2'],
            ['book_id' => '8', 'category_id' => '1'],
            ['book_id' => '8', 'category_id' => '2'],
            ['book_id' => '9', 'category_id' => '3'],
            ['book_id' => '10', 'category_id' => '3'],
            ['book_id' => '11', 'category_id' => '3'],
            ['book_id' => '12', 'category_id' => '3'],
            ['book_id' => '13', 'category_id' => '4'],
            ['book_id' => '14', 'category_id' => '4'],
            ['book_id' => '15', 'category_id' => '4'],
            ['book_id' => '16', 'category_id' => '4']
        ];

        DB::table('book__categories')->insert($bCategory);
    }
}
