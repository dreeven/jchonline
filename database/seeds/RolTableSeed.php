<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('roles') -> insert([
            'nombre' => 'Administrador',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('roles') -> insert([
            'nombre' => 'Alumno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
