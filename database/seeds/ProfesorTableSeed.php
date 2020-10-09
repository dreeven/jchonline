<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProfesorTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::Table('profesors') -> insert([
        //     'nombre' => 'Juan Carlos',
        //     'ap_paterno' => 'Hernández',
        //     'ap_materno' => 'Martínez',
        //     'genero_id' => 1,
        //     'telefono' => '5555555555',
        //     'red_social' => 'Facebook: juancarloshernandez.j',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);

        $profesores = factory(App\Profesor::class, 1980)->create();
    }
}
