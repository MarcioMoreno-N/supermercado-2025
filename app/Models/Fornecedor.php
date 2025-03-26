<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;

    protected $table = 'fornecedores'; // Nome da tabela no banco

    protected $fillable = [
        'nome',
        'razao_social',
        'cnpj',
    ];
}
