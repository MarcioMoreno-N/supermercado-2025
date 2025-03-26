<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Importa o Model Produto

class ProdutosController extends Controller
{
    public function show()
    {
        $produtos = Produto::all(); // Busca todos os produtos no banco
        return view('produtos_show', compact('produtos')); // Envia os produtos para a view
    }
}
