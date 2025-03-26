<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TipoProdutoController; // Adicione esta linha
use App\Http\Controllers\FornecedorController; // Importa o Controller

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'show']);
Route::get('/tipos-produtos', [TipoProdutoController::class, 'show']); // Adicione esta linha
Route::get('/fornecedores', [FornecedorController::class, 'index']);
