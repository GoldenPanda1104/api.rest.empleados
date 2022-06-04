<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@ifudis.com',
             'password' => bcrypt('password'),
         ]);

         \App\Models\User::factory()->create([
            'name' => 'User 1',
            'email' => 'user1@ifudis.com',
            'password' => bcrypt('password1'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'User 2',
            'email' => 'user2@ifudis.com',
            'password' => bcrypt('password2'),
        ]);
    }
}
