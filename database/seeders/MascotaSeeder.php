<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mascotas')->insert([
            'nick' => 'Toni',
            'password' => 'admin',
            'nombre' => 'Luna',
            'raza' => 'Bulldog',
            'sexo' => 'hembra',
            'edad' => '5',
            'color' => 'Negro',
            'nombreHumano' => 'Toni',
            'telefono' => '691241046',
            'foto' => 'images/perfil/luna.jpg',
        ]);
        DB::table('mascotas')->insert([
            'nick' => 'Sergi',
            'password' => 'admin',
            'nombre' => 'Sol',
            'raza' => 'Bulldog',
            'sexo' => 'macho',
            'edad' => '7',
            'color' => 'Blanco',
            'nombreHumano' => 'Sergi',
            'telefono' => '691241046',
            'foto' => 'images/perfil/sol.jpg',
        ]);
        DB::table('mascotas')->insert([
            'nick' => 'Olga',
            'password' => 'admin',
            'nombre' => 'Pitufina',
            'raza' => 'Labrador',
            'sexo' => 'hembra',
            'edad' => '7',
            'color' => 'Blanco',
            'nombreHumano' => 'Olga',
            'telefono' => '691241046',
            'foto' => 'images/perfil/pitufina.jpg',
        ]);
        DB::table('mascotas')->insert([
            'nick' => 'Imma',
            'password' => 'admin',
            'nombre' => 'Putifino',
            'raza' => 'Labrador',
            'sexo' => 'macho',
            'edad' => '7',
            'color' => 'Blanco',
            'nombreHumano' => 'Imma',
            'telefono' => '691241046',
            'foto' => 'images/perfil/pitufino.jpg',
        ]);

    }
}
