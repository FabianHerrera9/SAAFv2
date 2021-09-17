<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    use HasFactory;
    protected $table='prestamos';
    protected $primaryKey='id';
    protected $fillable=[
        'FechaPrestamo',
        'FechaDevolucion',
        'Observaciones',
        'Estado',
        'IdActivo',
        'IdDocente',
        'IdAmbiente',
        'IdUsuario',
        'Tipo'

    ];

}
