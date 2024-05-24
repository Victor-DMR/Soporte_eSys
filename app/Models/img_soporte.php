<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_soporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'nit_cliente',
        'url_img',
    ];
}
