<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::insert([
            ["name" => "fantasy", "created_at" => now(), "updated_at" => now()],
            ["name" => "mystery", "created_at" => now(), "updated_at" => now()],
            ["name" => "romance", "created_at" => now(), "updated_at" => now()],
            [
                "name" => "westerns",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
