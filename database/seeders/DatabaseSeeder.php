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
        \App\Models\User::factory()->create([
            'name' => 'Lascabim',
            'email' => 'lascabim@gmail.com',
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Pedro Pais',
            'email' => 'pedropais@gmail.com',
        ]);
    }
}
