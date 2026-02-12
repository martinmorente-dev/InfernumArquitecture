<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genres;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([

            [
                'type' => 'Tipo <<Dark Souls>>',
                'principal' => true
            ],
            [
                'type' => 'Fantasia oscura',
                'principal' => false
            ],
            [
                'type' => 'Rol',
                'principal' => false
            ],
            [
                'type' => 'Dificiles',
                'principal' => false
            ]
        ]);
    }
}
