<?php

namespace Database\Seeders;

use App\Models\Disscount;
use Illuminate\Database\Seeder;

class DisscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Disscount::create(
            [
                'name' => 'Descuentos Verano',
                'percentage' => '20',
                'valid_at' => now()->addDays(2),
                'expires_at' => now()->addMonth(6),
                'active' => false
            ]);
    }
}
