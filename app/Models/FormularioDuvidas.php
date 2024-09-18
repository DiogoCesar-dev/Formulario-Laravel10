<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioDuvidas extends Model
{
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'sistema',
        'perfil',
        'duvida',
        'upload_link',
    ];
}
