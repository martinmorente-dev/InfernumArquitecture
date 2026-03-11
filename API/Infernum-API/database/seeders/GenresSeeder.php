<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::insert([

            [
                'type' => 'Tipo <<Dark Souls>>'
            ],
            [
                'type' => 'Fantasia oscura'
            ],
            [
                'type' => 'Rol'
            ],
            [
                'type' => 'Dificiles'
            ],
            [
                'type' => 'Survival Horror'
            ],
            [
                'type' => 'Zombies'
            ],
            [
                'type' => 'Horror'
            ],
            [
                'Third-Person Shooter'
            ],
            [
                'type' => 'Ciencia ficción'
            ],     
            [
                'type' => 'Cyberpunk'
            ],           
            [
                'type' => 'Mundo abierto'
            ],        
            [
                'type' => 'Turnos'
            ],               
            [
                'type' => 'Simulación'
            ],           
            [
                'type' => 'Granja'
            ],               
            [
                'type' => 'Rogue-like'
            ],           
            [
                'type' => 'FPS'
            ],                  
            [
                'type' => 'Acción'
            ],               
            [
                'type' => 'Deducción social'
            ],     
            [
                'type' => 'Multijugador'
            ],         
            [
                'type' => 'Crimen'
            ],               
            [
                'type' => 'Western'
            ],              
            [
                'type' => 'Aventura'
            ],             
            [
                'type' => 'Mitología'
            ],            
            [
                'type' => 'Puzles'
            ],               
            [
                'type' => 'Narrativa'
            ],            
            [
                'type' => 'Plataformas'
            ],          
            [
                'type' => 'Metroidvania'
            ],         
            [
                'type' => 'Superhéroes'
            ],          
            [
                'type' => 'Sigilo'
            ],               
            [
                'type' => 'Post-apocalíptico'
            ]     
        ]);
    }
}
