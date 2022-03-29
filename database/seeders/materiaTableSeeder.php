<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;

class materiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materia')->insert([
            'Nombre' => 'Matematica',
            'Descripcion' => 'Las matemáticas son una ciencia formal, que estudia la relación
             entre entes o elementos abstractos, como son los números.',
        ]);
    }
}
