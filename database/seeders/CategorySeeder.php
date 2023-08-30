<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['cat_name' => 'Comedy'],
            ['cat_name' => 'Romance'],
            ['cat_name' => 'Horror'],
            ['cat_name' => 'Fantasy']
        ];

        DB::table('categories')->insert($category);
    }
}
