<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CursoInscritoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('cursos_inscritos') -> insert([
            'asistencia_id' => 1,
            'estado_pago_id' => 1,
            'curso_id' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('cursos_inscritos') -> insert([
            'asistencia_id' => 2,
            'estado_pago_id' => 1,
            'curso_id' => 2,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('cursos_inscritos') -> insert([
            'asistencia_id' => 2,
            'estado_pago_id' => 1,
            'curso_id' => 3,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('cursos_inscritos') -> insert([
            'asistencia_id' => 2,
            'estado_pago_id' => 1,
            'curso_id' => 3,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
    }
}
