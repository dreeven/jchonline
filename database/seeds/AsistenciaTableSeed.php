<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AsistenciaTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('asistencia') -> insert([
            'nombre' => 'Asistió',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('asistencia') -> insert([
            'nombre' => 'Pendiente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('asistencia') -> insert([
            'nombre' => 'Faltó',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
