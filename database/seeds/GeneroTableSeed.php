<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GeneroTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('genero') -> insert([
            'nombre' => 'Masculino',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('genero') -> insert([
            'nombre' => 'Femenino',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
