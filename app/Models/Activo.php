<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    public $table = 'activos';
    public $primaryKey = 'id';
    public $fillable = [
        'NombreActivo',
        'SN',
        'Marca',
        'Modelo',
        'Descripcion',
        'Garantia',
        'TipoActivo',
        'IdProveedor',
        'IdUsuario',
        'Img'
    ];

}
