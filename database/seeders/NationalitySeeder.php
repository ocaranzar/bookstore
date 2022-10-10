<?php

namespace Database\Seeders;

use App\Models\Nationality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nationality::insert([
            ["name" => "chilean", "created_at" => now(), "updated_at" => now()],
            [
                "name" => "american",
                "created_at" => now(),
                "updated_at" => now(),
            ],
            ["name" => "german", "created_at" => now(), "updated_at" => now()],
            [
                "name" => "japanese",
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
