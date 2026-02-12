<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirements;

class Requirements extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Requirements::create([
            'type' => 'min',
            'cpu' => 'Intel Core i5-2300 2.8 GHz / AMD FX-6300, 3.5 GHz'
        ]);
    }
}
