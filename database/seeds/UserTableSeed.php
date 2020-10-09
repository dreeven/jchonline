<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('users') -> insert([
            'name' => 'Cristina',
            'ap_paterno' => 'Ruiz',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5549039284',
            'email' => 'gcra10@gmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'María',
            'ap_paterno' => 'Jamaica',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5564272851',
            'email' => 'jamaica.m114@gmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'Isabel',
            'ap_paterno' => 'Rosales',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '6942930544',
            'email' => 'issa_ross@hotmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'Mica',
            'ap_paterno' => 'Cerezo',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5525162231',
            'email' => 'mica.cerezo58@gmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'Sandra',
            'ap_paterno' => 'Santillan',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5591106696',
            'email' => 'sandysanti@hotmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'Laura',
            'ap_paterno' => 'Gutierrez',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5548235831',
            'email' => 'lauragtzorz@gmail.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::Table('users') -> insert([
            'name' => 'Martha',
            'ap_paterno' => 'Torres',
            'localidad' => 'Ecatepec de Morelos',
            'telefono' => '5521498438',
            'email' => 'marthatorresh@yahoo.com',
            'rol_id' => 2,
            'password' => Hash::make('12345678'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
