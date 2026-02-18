<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = Game::create(
            [

                    'name' => 'DARK SOULS™: REMASTERED',

                    'short_description' => 'Entonces llegó el Fuego. Vuelve a disfrutar del aclamado juego que defi ió el género con el que empezó todo. Gracias a una magnífica remasterización, podrás regresar a Lordran con unos impresionantes detalles en alta definición y a 60 fps.',

                    'long_description' => 'Entonces llegó el Fuego. Vuelve a disfrutar del aclamado juego que definió el género con el que empezó todo. Gracias a una magnífica remasterización, podrás regresar a Lordran con unos impresionantes detalles en alta definición y a 60 fps.
Dark Souls Remastered incluye el juego principal y el contenido descargable "Artorias of the Abyss". Características principales: • Un universo profundo y oscuro • Cada final supone un nuevo comienzo • Compleja jugabilidad con muchas posibilidades • Te sientes realizado al ir aprendiendo y dominando el juego • Multijugador (hasta 6 jugadores con servidores dedicados)',
                    'price' => 39.99

        ]);

        $game->genres()->attach([1,2,3,4]);
    }


}
