<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'nitcli',
        'cliente',
        'descrip_service',
        'anydesk',
        'observacion',
        'estado_service',
        'tecnico',
    ];
}
