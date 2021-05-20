<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table='mantenimientos';
    protected $primaryKey='id';
    protected $fillable=[
        'Tipo',
        'Fecha',
        'ProblemaFallo',
        'ProveedorServ',
        'Reparador',
        'TrabajoRealizado',
        'Solucion',
        'ActaServicio',
        'IdActivo',
    ];

}
