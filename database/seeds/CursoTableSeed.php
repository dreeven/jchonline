<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CursoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clase 1
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 8, 24, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 8, 24, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        //clase 2
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 8, 26, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 8, 26, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 3
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 8, 31, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 8, 31, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 4
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 9, 2, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 9, 2, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 5
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 9, 7, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 9, 7, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 6
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 9, 9, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 9, 9, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 7
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 9, 14, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 9, 14, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //clase 8
        DB::Table('cursos') -> insert([
            'nombre' => 'Clase de Zumba Fitness',
            'descripcion' => '¡Baila, ejercítate y diviértete en casa!',
            'fecha_ini' => Carbon::create(2020, 9, 16, 18, 0, 0),
            'fecha_fin' => Carbon::create(2020, 9, 16, 19, 0, 0),
            'precio' => 20,
            'profesor_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
