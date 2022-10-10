<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::insert([
            [
                "name" => "disney–Lucasfilm Press",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "superNowa",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            ["name" => "marvel", "created_at" => now(), "updated_at" => now()],
        ]);
    }
}
