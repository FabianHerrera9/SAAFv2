<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $table='asignacion';
    protected $primaryKey ='id';
    protected $fillable = [

        'Fecha',
        'Observaciones',
        'Estado',
        'IdActivo',
        'IdDocente',
        'IdAmbiente',
        'IdUsuario',

    ];


}
