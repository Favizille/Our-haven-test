<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $users = [
            [
                'name' => 'Chinonso Obi',
                'email' => 'chinonso@example.com',
            ],
            [
                'name' => 'Aniedi Umana',
                'email' => 'aniuma@example.com',
            ],
            [
                'name' => 'Tolu Adegoke',
                'email' => 'tolu@example.com',
            ],
        ];

        foreach ($users as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => Hash::make('password'), 
            ]);
        }
    }
}
