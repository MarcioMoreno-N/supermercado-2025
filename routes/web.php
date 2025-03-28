<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\TipoProdutoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'show']);
Route::get('/tipos-produtos', [TipoProdutoController::class, 'show']);

// Fornecedores
Route::get('/fornecedores', [FornecedorController::class, 'index']);
Route::get('/fornecedores/create', [FornecedorController::class, 'create']);
Route::post('/fornecedores', [FornecedorController::class, 'store']);
Route::get('/fornecedores/{id}/edit', [FornecedorController::class, 'edit']);        // Corrigido de "editar" para "edit"
Route::put('/fornecedores/{id}', [FornecedorController::class, 'update']);
Route::delete('/fornecedores/{id}', [FornecedorController::class, 'destroy']);
