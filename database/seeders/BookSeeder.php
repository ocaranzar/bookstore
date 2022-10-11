<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::insert([
            [
                "cover" => "url 1",
                "name" => "ahsoka",
                "pages" => "356",
                "isbn" => "1484705661",
                "release_date" => now(),
                "genre_id" => 1,
                "writer_id" => 1,
                "publisher_id" => 1,
                "mediatype_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "cover" => "url 2",
                "name" => "book 2",
                "pages" => "356",
                "isbn" => "1484705662",
                "release_date" => now(),
                "genre_id" => 2,
                "writer_id" => 2,
                "publisher_id" => 2,
                "mediatype_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "cover" => "url 3",
                "name" => "book 3",
                "pages" => "356",
                "isbn" => "1484705663",
                "release_date" => now(),
                "genre_id" => 3,
                "writer_id" => 3,
                "publisher_id" => 3,
                "mediatype_id" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
