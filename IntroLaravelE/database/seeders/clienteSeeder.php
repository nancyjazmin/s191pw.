<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
            'nombre'=>'Isa',
            'apellido'=>'Villagran',
            'correo'=>'Isa@gmail.com',
            'telefono'=>'+123456984185'
        ],
        [
            'nombre'=>'Santiago',
            'apellido'=>'Amaya',
            'correo'=>'Santiago@gmail.com',
            'telefono'=>'+12345679023'
        ],
        [
            'nombre'=>'Lolis',
            'apellido'=>'Zuñiga',
            'correo'=>'Lolis@gmail.com',
            'telefono'=>'+120953484185'
        ]
    ]);
    
    }
}
