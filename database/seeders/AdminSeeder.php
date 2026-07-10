<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@medix.com'], // Yeh aapki admin email hogi
            [
                'name' => 'Admin Mansoor',
                'password' => Hash::make('mansoor@1'), // Apna secure password yahan rakhein
                'usertype' => 'admin', // Aapke user table mein admin check karne ke liye jo bhi column hai (jaise 'role' ya 'is_admin')
            ]
        );
    }
}