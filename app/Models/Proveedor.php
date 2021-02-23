<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    public $table = 'proveedores';
    public $primaryKey = 'id';
    public $fillable = [
        'Provid',
        'ProvName',
        'Tel',
        'Email',
        'ProvDir',
        'Tipoid',
        'Tipoprov',
    ];
}
