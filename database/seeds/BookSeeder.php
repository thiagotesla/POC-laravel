<?php

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Book $book)
    {
        $book->create([
            'user_id'=> '7',
            'title'=> 'PHP',
            'pages'=> '120',
            'price'=> '90.90',
        ]);
        $book->create([
            'user_id'=> '7',
            'title'=> 'JavaScript',
            'pages'=> '200',
            'price'=> '1000',
        ]);
        $book->create([
            'user_id'=> '7',
            'title'=> 'Python',
            'pages'=> '3',
            'price'=> '1.99',
        ]);
    }
}
