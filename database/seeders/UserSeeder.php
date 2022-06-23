<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create min 50 items
        User::factory()->count(50)->create();

        User::factory()->count(1)->create([
            "name" => "richard ocaranza",
            "email" => "richard@gmail.com",
            "password" => Hash::make("123456"),
        ]);
    }
}
