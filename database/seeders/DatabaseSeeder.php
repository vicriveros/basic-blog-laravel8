<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Victor Riveros',
            'email' => 'vr@admin.com',
            'password' => bcrypt('123')
        ]);

        \App\Models\Post::factory(24)->create();
    }
}
