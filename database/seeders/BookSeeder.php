<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = [
            ['publisher_id' => '1', 'title' => 'The Bequest', 'author' => 'B. E. Baker', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/2940162379010_p0_v1_s600x595.jpg'],
            ['publisher_id' => '2', 'title' => 'It Starts with Us: A Novel', 'author' => 'Colleen Hoover', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781668001226_p0_v5_s600x595.jpg'],
            ['publisher_id' => '3', 'title' => 'The American Roommate Experiment: A Novel', 'author' => 'Elena Armas', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781668002773_p0_v6_s600x595.jpg'],
            ['publisher_id' => '4', 'title' => 'In a New York Time', 'author' => 'Kate Spencer', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781538737613_p0_v6_s600x595.jpg'],
            ['publisher_id' => '1', 'title' => 'Love on the Brain', 'author' => 'Ali Hazelwood', 'year' => '2016', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780593336847_p0_v6_s600x595.jpg'],
            ['publisher_id' => '2', 'title' => 'Hook, Line, and Sinker', 'author' => 'Tessa Bailey', 'year' => '2016', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780063045699_p0_v6_s600x595.jpg'],
            ['publisher_id' => '3', 'title' => 'Ship Wrecked: A Novel', 'author' => 'Olivia Dade', 'year' => '2016', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780063215887_p0_v2_s600x595.jpg'],
            ['publisher_id' => '4', 'title' => 'The Dead Romantics', 'author' => 'Ashley Poston', 'year' => '2016', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780593336489_p0_v5_s600x595.jpg'],
            ['publisher_id' => '1', 'title' => 'What Moves the Dead', 'author' => 'T. Kingfisher', 'year' => '2017', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781250830753_p0_v12_s600x595.jpg'],
            ['publisher_id' => '2', 'title' => 'Sign Here', 'author' => 'Claudia Lux', 'year' => '2017', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780593545768_p0_v2_s600x595.jpg'],
            ['publisher_id' => '3', 'title' => 'Hidden Pictures: A Novel', 'author' => 'Jason Rekulak', 'year' => '2017', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781250819369_p0_v3_s600x595.jpg'],
            ['publisher_id' => '4', 'title' => 'A Dowry of Blood', 'author' => 'S. T. Gibson', 'year' => '2017', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780316501071_p0_v4_s600x595.jpg'],
            ['publisher_id' => '1', 'title' => 'A River Enchanted: A Novel', 'author' => 'Rebecca Ross', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780063055995_p0_v6_s600x595.jpg'],
            ['publisher_id' => '2', 'title' => 'One Dark Window', 'author' => 'Rachel Gillig', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780316312486_p0_v4_s600x595.jpg'],
            ['publisher_id' => '3', 'title' => 'Cackle', 'author' => 'Rachel Harrison', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9780593202036_p0_v3_s600x595.jpg'],
            ['publisher_id' => '4', 'title' => 'Light from Uncommon Stars', 'author' => 'Ryka Aoki', 'year' => '2018', 'synopsis' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore cum amet suscipit, eos adipisci mollitia fugit blanditiis illum rem ut!', 'image' => 'https://prodimage.images-bn.com/pimages/9781250789082_p0_v6_s600x595.jpg']
        ];

        DB::table('books')->insert($book);
    }
}
