<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writer::insert([
            [
                "name" => "e. k. johnston",
                "nationality_id" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "writer 1",
                "nationality_id" => 2,
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "name" => "writer 2",
                "nationality_id" => 3,
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
