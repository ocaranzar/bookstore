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
        User::insert([
            [
                "first_name" => "richard",
                "last_name" => "ocaranza",
                "username" => "rocaranza",
                "email" => "r.ocaranza96@gmail.com",
                "password" => Hash::make("Torres1996!"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "first_name" => "seller",
                "last_name" => "seller",
                "username" => "seller",
                "email" => "seller@gmail.com",
                "password" => Hash::make("Torres1996!"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
            [
                "first_name" => "client",
                "last_name" => "client",
                "username" => "client",
                "email" => "client@gmail.com",
                "password" => Hash::make("Torres1996!"),
                "created_at" => now(),
                "updated_at" => now(),
            ],
        ]);
    }
}
