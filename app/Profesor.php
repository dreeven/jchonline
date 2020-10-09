<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = [
        'nombre', 'ap_paterno', 'ap_materno', 'genero_id', 'red_social',
    ];

}
