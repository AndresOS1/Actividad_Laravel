<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class estudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiante')->insert([
            'nombre-Estudiante' => 'Andres',
            'apellido-Estudiante' => 'Ordoñez',
            'direccion' => 'Calle 64 #15-101',
            'Telefono' => '300776316',
            'tipo-doc' => 'C.C',
            'num-doc' => '1002964274',
        ]);
    }
}

