<?php

namespace Database\Seeders;

use App\Models\MediaType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaType::insert([
            [
                "name" => "hardcover",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "paperback",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "ebook",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
