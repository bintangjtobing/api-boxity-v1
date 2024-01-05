<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 3 dummy users
        for ($i = 0; $i < 3; $i++) {
            $user = new User;
            $user->name = 'User' . ($i + 1);
            $user->username = 'User' . ($i + 1);
            $user->email = 'user' . ($i + 1) . '@example.com';
            $user->password = Hash::make('password');
            $user->save();
        }
    }
}
