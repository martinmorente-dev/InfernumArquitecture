<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Requirement::insert([
            [
                'type' => 'minimun',
                'os' => 'Windows 7 64-bit, Service Pack 1',
                'cpu' => 'Intel Core i5-2300 2.8 GHz / AMD FX-6300, 3.5 GHz',
                'ram' => '6 GB',
                'gpu' => 'GeForce GTX 460, 1 GB / Radeon HD 6870, GB',
                'storage' => '8 GB'
            ],
            [
                'type' => 'recomended',
                'os' => 'Windows 10 64-bit',
                'cpu' => 'Inter core i5-4570 3.2 GHz / AMD FX-8350 4.2 GHz',
                'ram' => '8 GB',
                'gpu' => 'GeForce GTX 660, 2GB / Radeon HD 7870, 2GB',
                'storage' => '8 GB'
            ]
        ]);
    }
}

