<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor; // Importa o Model Fornecedor

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all(); // Busca todos os fornecedores no banco
        return view('fornecedores_show', compact('fornecedores')); // Envia os dados para a view
    }
}
