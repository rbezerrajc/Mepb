<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;
    protected $table='pessoas';

    protected $fillable = [
        'id',
        'name',
        'endereco',
        'tell',
        'redes_sociais',
        'membro_igreja',
        'imagem',
        'niver',
        'data_membro',
        'observacoes',
        'casado_com',
        'niver_casamento',
     'tipo',
    ];
}

         