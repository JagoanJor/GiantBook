<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $publisher = [
            ['pub_name' => 'Andi', 'alamat' => 'Jl. Anggrek', 'phone' => '0812344321', 'email' => 'andi@gmail.com', 'image' => 'https://cdn-icons-png.flaticon.com/512/4128/4128176.png'],
            ['pub_name' => 'Budi', 'alamat' => 'Jl. Merak', 'phone' => '0823455432', 'email' => 'budi@gmail.com', 'image' => 'https://cdn-icons-png.flaticon.com/512/4128/4128176.png'],
            ['pub_name' => 'Coki', 'alamat' => 'Jl. Gatot Subroto', 'phone' => '0834566543', 'email' => 'coki@gmail.com', 'image' => 'https://cdn-icons-png.flaticon.com/512/4128/4128176.png'],
            ['pub_name' => 'Dedi', 'alamat' => 'Jl. Sudirman', 'phone' => '0845677654', 'email' => 'dedi@gmail.com', 'image' => 'https://cdn-icons-png.flaticon.com/512/4128/4128176.png']
        ];

        DB::table('publishers')->insert($publisher);
    }
}
