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
            ['email' => 'admin@medix.com'],
            [
                'name' => 'Admin Mansoor',
                'password' => Hash::make('mansoor@1'), // Apna password yahan verify karlein
                'usertype' => 'admin', // Logs ke mutabiq aapka column 'usertype' hai
                'contact' => '03000000000', // Yeh line humne add ki hai taake error khatam ho
            ]
        );
    }
}
