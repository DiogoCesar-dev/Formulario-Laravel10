<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'cpf', 'email', 'sistema', 'perfil', 'duvida', 'docs'
    ];

    protected $casts = [
        'docs' => 'array',
    ];
}

