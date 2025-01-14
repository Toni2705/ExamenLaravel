<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Mascota extends Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $fillable = [
        'id', 'nick', 'password', 'nombre',
        'raza', 'sexo', 'edad', 'color',
        'nombreHumano', 'telefono', 'foto'
    ];
}
