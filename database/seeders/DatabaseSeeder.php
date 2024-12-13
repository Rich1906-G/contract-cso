<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contract;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(1)->create([
            'name' => 'David Richardo Gultom',
            'username' => 'David',
            'email' => 'DavidgultomM@gmail.com',
            'type' => 1,
        ]);

        User::factory(1)->create([
            'name' => 'Suhendi',
            'username' => 'Suhendi',
            'type' => 2,
        ]);

        User::factory(1)->create([
            'name' => 'Alfata Satria Oktama',
            'username' => 'Satria',
            'type' => 3,
        ]);

    }
}
