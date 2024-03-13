<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        User::factory(5000)->create();
        User::create([
            'name' => 'kucing',
            'password' => 'kucing',
            'email' => 'kucing@email.com',
            'role_id' => '1'
        ]);
        User::create([
            'name' => 'notrisaa',
            'password' => 'notrisaa',
            'email' => 'notrisaa@email.com',
            'role_id' => '2'
        ]);
        User::create([
            'name' => 'jasheil',
            'password' => 'jasheil',
            'email' => 'jasheil@email.com',
            'role_id' => '2'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Roles::create([
            'role' => 'admin',
            // 'description' => 'admin',
            'role_id' => 1
        ]);
        Roles::create([
            'role' => 'helper',
            // 'description' => 'admin',
            'role_id' => 2
        ]);
    }
}
