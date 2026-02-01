<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'admin-infernum@gmail.com',
            'nickname' => 'admin',
            'password' => bcrypt('demajeya'),
            'role' => 'admin',
            'created_at' => now()
        ]);
    }
}
