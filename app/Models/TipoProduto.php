<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoProduto extends Model
{
    use HasFactory;

    protected $table = 'tipos_produtos'; // Nome da tabela no banco

    protected $fillable = [
        'nome', // Coluna que pode ser preenchida
    ];
}
