<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Pehle se maujood test user ka code (agar rakhna chahein)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Yeh alag se baahir hona chahiye, factory ke andar nahi
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
