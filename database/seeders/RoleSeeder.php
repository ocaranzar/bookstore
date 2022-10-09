<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ["name" => "client", "created_at" => now(), "updated_at" => now()],
            ["name" => "seller", "created_at" => now(), "updated_at" => now()],
            ["name" => "admin", "created_at" => now(), "updated_at" => now()],
        ]);
    }
}
