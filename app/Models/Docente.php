<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $all)
 */
class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'Identificacion',
        'NomDocente',
        'Telefono',
        'Email',
        'TipoId',
        'IdEspecialidad'
    ];
}
