<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProduto; // Importa o Model

class TipoProdutoController extends Controller
{
    public function show()
{
    $tipos_produtos = TipoProduto::all(); // Busca todos os tipos de produtos no banco
    return view('tipos_produtos_show', compact('tipos_produtos')); // Envia para a view
}
}
