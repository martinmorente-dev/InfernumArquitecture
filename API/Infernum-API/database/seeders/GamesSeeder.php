<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game1 = Game::create(
            [
                'name' => 'DARK SOULS™: REMASTERED',

                'short_description' => 'Entonces llegó el Fuego. Vuelve a disfrutar del aclamado juego que defi ió el género con el que empezó todo. Gracias a una magnífica remasterización, podrás regresar a Lordran con unos impresionantes detalles en alta definición y a 60 fps.',

                'long_description' => 'Entonces llegó el Fuego. Vuelve a disfrutar del aclamado juego que definió el género con el que empezó todo. Gracias a una magnífica remasterización, podrás regresar a Lordran con unos impresionantes detalles en alta definición y a 60 fps. Dark Souls Remastered incluye el juego principal y el contenido descargable "Artorias of the Abyss". Características principales: • Un universo profundo y oscuro • Cada final supone un nuevo comienzo • Compleja jugabilidad con muchas posibilidades • Te sientes realizado al ir aprendiendo y dominando el juego • Multijugador (hasta 6 jugadores con servidores dedicados)',
                'price' => 39.99,
                'discounts_id' => 1
        ]);

        $game2 = Game::create(
        [
                'name' => 'Resident Evil Requiem',
                'short_description' => 'Requiem for the dead. Nightmare for the living. Prepare to escape death in a heart-stopping experience that will chill you to your core.',
                'long_description' => "Requiem for the dead. Nightmare for the living. A new era of survival horror arrives with Resident Evil Requiem, the latest and most immersive entry yet in the iconic Resident Evil series. Experience terrifying survival horror with FBI analyst Grace Ashcroft, and dive into pulse-pounding action with legendary agent Leon S. Kennedy. Both of their journeys and unique gameplay styles intertwine into a heart-stopping, emotional experience that will chill you to your core.Raccoon City Return once again to the city of disaster and despair.A midwestern city in the United States and the headquarters for the former global pharmaceutical company, Umbrella.In the face of the zombie outbreak in 1998, the government approved a sterilization operation, a missile strike on the city in an attempt to quickly bring the situation under control—but this was swiftly covered up.Grace Ashcroft An intelligence analyst for the FBI who demonstrates intense focus and insight in deductive reasoning and analysis. Her mother's death shook her to the soul, making her an introvert who immerses herself in work. So she heads to the abandoned hotel alone to investigate this mysterious death. Leon S. Kennedy One of the survivors of the Raccoon City Incident. With a strong sense of justice and physical capabilities to match, he has responded to numerous outbreaks since that fateful day. Now, as a seasoned DSO agent combatting bioterrorism, he has returned to investigate the latest string of deaths in the Midwest. Gameplay Experience the series' classic survival horror through combat, investigations, puzzles, and resource management. Gameplay allows you to freely switch between first and third-person views to face the horrors in a way that suits your playstyle.",
                'price' => 69.99,
                'discounts_id' => null
        ]);


        $game3 = Game::create([
            'name' => 'Cyberpunk 2077',
            'short_description' => 'RPG de acción en mundo abierto ambientado en Night City.',
            'long_description' => 'Cyberpunk 2077 es una historia de acción y aventura en mundo abierto ambientada en Night City, una megalópolis obsesionada con el poder, el glamour y la modificación corporal. Elige entre ser una estrella del rock corporativa, un hustler callejero o explora los límites entre ambos.',
            'price' => 59.99,
            'discounts_id' => null
        ]);

        $game4 = Game::create([
            'name' => "Baldur's Gate 3",
            'short_description' => 'Reúne a tu grupo y regresa a los Reinos Olvidados.',
            'long_description' => "Baldur's Gate 3 es un RPG basado en grupos ambientado en el universo de D&D 5E. Una gran aventura te espera a ti y tus compañeros, llena de peligro y oportunidad. Crea tu propio héroe, recluta compañeros y reúne tu grupo para enfrentarte a los males que amenazan Puerta de Baldur.",
            'price' => 59.99,
            'discounts_id' => null
        ]);

        $game5 = Game::create([
            'name' => 'Stardew Valley',
            'short_description' => 'Heredaste la vieja granja de tu abuelo en Stardew Valley.',
            'long_description' => 'Acabas de empezar tu vida en el campo. Equipado con herramientas de segunda mano y unas pocas monedas, comienzas tu nueva vida. ¿Podrás aprender a vivir de la tierra y convertir estos campos abandonados en un hogar próspero? No será fácil.',
            'price' => 14.99,
            'discounts_id' => null
        ]);

        $game6 = Game::create([
            'name' => 'Hades',
            'short_description' => 'Desafía a los dioses del inframundo como Zagreo.',
            'long_description' => 'Hades es un rogue-like de mazmorras de los creadores de Bastion y Transistor. Juegas como Zagreo, príncipe del Inframundo, intentando escapar del dominio de su padre. Usa los poderes de los dioses olímpicos para luchar. Cada muerte es una nueva oportunidad para mejorar.',
            'price' => 24.99,
            'discounts_id' => null
        ]);

        $game7 = Game::create([
            'name' => 'The Witcher 3: Wild Hunt',
            'short_description' => 'Eres Geralt de Rivia, cazador de monstruos a sueldo.',
            'long_description' => 'Eres Geralt de Rivia, cazador de monstruos a sueldo. Ante ti se extiende un continente devastado por la guerra e infestado de monstruos que puedes explorar libremente. Tu contrato actual: rastrear a Ciri, la Niña de la Profecía.',
            'price' => 39.99,
            'discounts_id' => null
        ]);

        $game8 = Game::create([
            'name' => 'DOOM Eternal',
            'short_description' => 'Los ejércitos del Infierno han invadido la Tierra.',
            'long_description' => "Los ejércitos del Infierno han invadido la Tierra. Conviértete en el Exterminador en una épica campaña individual para conquistar demonios a través de dimensiones y detener la destrucción final de la humanidad.",
            'price' => 39.99,
            'discounts_id' => null
        ]);

        $game9 = Game::create([
            'name' => 'Among Us',
            'short_description' => 'Juego de fiesta online de trabajo en equipo y traición.',
            'long_description' => 'Un juego de fiesta online y local de trabajo en equipo y traición para 4-15 jugadores... ¡en el espacio! Encuentra al Alien entre tu tripulación y prepárate para la traición como nunca antes.',
            'price' => 4.99,
            'discounts_id' => null
        ]);

        $game10 = Game::create([
            'name' => 'Grand Theft Auto V',
            'short_description' => 'Los Santos: una metrópoli bañada por el sol llena de gurús.',
            'long_description' => 'Cuando una banda callejera choca con un joven criminal, criminales experimentados y la policía en una implacable lucha de poder a través del bajo mundo criminal. Tres criminales que hacen todo lo posible por sobrevivir en las despiadadas calles de Los Santos.',
            'price' => 29.99,
            'discounts_id' => null
        ]);

        $game11 = Game::create([
            'name' => 'Red Dead Redemption 2',
            'short_description' => 'América, 1899. El fin de la era del oeste salvaje.',
            'long_description' => 'América, 1899. El fin de la era del oeste salvaje ha comenzado mientras los agentes de la ley cazan las últimas bandas de forajidos. Quienes no se rindan lucharán hasta el final. Sé testigo del ascenso de la legendaria banda de forajidos Van der Linde.',
            'price' => 59.99,
            'discounts_id' => null
        ]);

        $game12 = Game::create([
            'name' => 'God of War',
            'short_description' => 'Kratos es un dios de la guerra, ex soldado espartano.',
            'long_description' => 'Kratos es un dios de la guerra, ex soldado espartano brutalmente ejecutado por el guerrero Ares. Fue rescatado del Inframundo por Atenea. Kratos se vengó de Ares matándolo. Ahora sirve a los dioses del Olimpo como su verdugo.',
            'price' => 49.99,
            'discounts_id' => null
        ]);

        $game13 = Game::create([
            'name' => 'Portal 2',
            'short_description' => 'Eres un sujeto de pruebas en un juego mortal.',
            'long_description' => 'Portal 2 es la secuela del aclamado juego de puzzles en primera persona. Los jugadores se ponen en los zapatos de Chell, una sujeto de pruebas despertada después de un siglo de animación suspendida.',
            'price' => 9.99,
            'discounts_id' => null
        ]);

        $game14 = Game::create([
            'name' => 'Half-Life 2',
            'short_description' => 'Gordon Freeman está de vuelta para luchar contra la invasión alienígena.',
            'long_description' => 'Gordon Freeman está de vuelta y listo para luchar contra la invasión alienígena una vez más. Nombrado Juego del Año por más de 50 publicaciones.',
            'price' => 9.99,
            'discounts_id' => null
        ]);

        $game15 = Game::create([
            'name' => 'Celeste',
            'short_description' => 'Madeline está escalando la Montaña Celeste.',
            'long_description' => 'Celeste es un plataformas de precisión sobre una joven llamada Madeline que lucha con sus dudas mientras escala una enorme montaña. Ayuda a Madeline a superar sus demonios internos.',
            'price' => 19.99,
            'discounts_id' => null
        ]);

        $game16 = Game::create([
            'name' => 'Hollow Knight',
            'short_description' => 'Desciende a antiguos salones bajo una montaña.',
            'long_description' => 'Desciende a antiguos salones bajo una montaña. Lucha contra insectos aterradores, explora cavernas escalofriantes y descubre los secretos de un reino en este juego estilo Metroidvania.',
            'price' => 14.99,
            'discounts_id' => null
        ]);

        $game17 = Game::create([
            'name' => 'Disco Elysium - The Final Cut',
            'short_description' => 'RPG de detective sobre fracaso, drogas y hombre cangrejo.',
            'long_description' => 'Disco Elysium es un revolucionario RPG de detective narrativo con un enorme elenco de personajes memorables. Sin combate. Pura historia. Conviértete en detective y resuelve un caso.',
            'price' => 39.99,
            'discounts_id' => null
        ]);

        $game18 = Game::create([
            'name' => "Marvel's Spider-Man Remastered",
            'short_description' => '¡El trabajo de un héroe nunca termina!',
            'long_description' => '¡El trabajo de un héroe nunca termina! Con el destino de Marvel\'s New York en sus manos, Spider-Man debe luchar contra villanos poderosos y sus propios demonios personales mientras intenta equilibrar su vida como Peter Parker y su deber como héroe.',
            'price' => 49.99,
            'discounts_id' => null
        ]);

        $game19 = Game::create([
            'name' => "Assassin's Creed Valhalla",
            'short_description' => '¡Lidera tus clanes vikingos hacia una nueva tierra!',
            'long_description' => '¡Lidera tus clanes vikingos hacia una nueva tierra! Como Eivor, un guerrero legendario criado entre lobos, forja un destino épico en la Inglaterra del siglo IX. Explora un mundo abierto masivo lleno de mitos nórdicos y batallas brutales.',
            'price' => 59.99,
            'discounts_id' => 2
        ]);

        $game20 = Game::create([
            'name' => 'Horizon Forbidden West',
            'short_description' => '¡Aloy regresa en una aventura épica!',
            'long_description' => '¡Aloy regresa en una aventura épica! Explora tierras salvajes y hostiles más allá de las fronteras prohibidas del Oeste, donde descubrirás nuevos territorios, culturas increíbles y amenazas aterradoras que pondrán a prueba tu valor.',
            'price' => 59.99,
            'discounts_id' => null
        ]);

        $game1->genres()->attach([1,2,3,4]);
        $game2->genres()->attach([5,6,7,8]);
        $game3->genres()->attach([3, 8, 9, 10]);  
        $game4->genres()->attach([3, 11, 24]);    
        $game5->genres()->attach([12, 13]);       
        $game6->genres()->attach([3, 14]);        
        $game7->genres()->attach([3, 2, 10]);     
        $game8->genres()->attach([15, 16]);       
        $game9->genres()->attach([17, 18]);       
        $game10->genres()->attach([10, 16, 19]);  
        $game11->genres()->attach([10, 20, 21]);  
        $game12->genres()->attach([16, 22]);      
        $game13->genres()->attach([23, 8]);       
        $game14->genres()->attach([15, 24]);      
        $game15->genres()->attach([25, 24]);      
        $game16->genres()->attach([26, 16]);      
        $game17->genres()->attach([3, 24]);       
        $game18->genres()->attach([27, 16]);      
        $game19->genres()->attach([28, 16]);      
        $game20->genres()->attach([29, 3]);       
        }


}
