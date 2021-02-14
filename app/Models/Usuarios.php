<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'IDENTIFICACIONUSU';
    protected $fillable = [
        'NOMBREUSU',
        'CARGOUSU',
        'TELEFONOUSU',
        'CORREOUSU',
        'CONTASEÑAUSU',
    ];
}
