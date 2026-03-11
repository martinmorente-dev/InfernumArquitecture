<?php

namespace Database\Seeders;

use App\Models\Discount;
use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Discount::insert([
            [
                'name' => 'Descuentos Verano',
                'percentage' => '20',
                'valid_at' => now(),
                'expires_at' => now()->addMonth(6),
            ],
            [
                'name' => 'Descuentos Ubisoft',
                'percentage' => '75',
                'valid_at' => now(),
                'expires_at' => now()->addMonth(6),
            ]
        ]);
    }
}
