<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OperativeSystems;

class OperativeSystems extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OperativeSystems::create([
            [
                'name' => 'Windows'
            ],
            [
                'name' => 'Linux'
            ],
            [
                'name' => 'Mac'
            ]
        ]);
    }
}
