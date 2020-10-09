<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EstadoPagoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('estado_pago') -> insert([
            'nombre' => 'Pagado',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('estado_pago') -> insert([
            'nombre' => 'Pendiente',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
