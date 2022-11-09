<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\book::factory(10)->create();
        \App\Models\member::factory(10)->create();
        \App\Models\User::factory(1)->create(
            [
            'name' => 'admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('admin123'),
    
            ]
        );
    }
}
