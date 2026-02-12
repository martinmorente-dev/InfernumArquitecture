<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ImageGames;

class ImageGameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageGames::create([

            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/header.jpg?t=1764975651',
                'type' => 'portrait',
                'gameId' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_3a71463e4ccaf28c5c27f6cf8d32a3a125f45404.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'gameId' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_92b2ba470cbfdb8839b649b3f478e5531dd81a17.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'gameId' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_626cc310dc9ac7fb146011582c864a35e5f3e381.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'gameId' => 1
            ],
            [
                'url' => 'https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/570940/ss_b4a80bd6e828a81db09ecbef5694e5d0cddb2caf.1920x1080.jpg?t=1764975651',
                'type' => 'gallery',
                'gameId' => 1
            ]
        ]);
    }
}
