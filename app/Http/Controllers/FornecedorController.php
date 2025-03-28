<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedores_show', compact('fornecedores'));
    }

    public function create()
    {
        return view('fornecedores_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'razao_social' => 'required|string',
            'cnpj' => 'required|string|unique:fornecedores,cnpj',
        ]);

        Fornecedor::create([
            'nome' => $request->nome,
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
        ]);

        return redirect('/fornecedores')->with('success', 'Fornecedor cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedores_edit', compact('fornecedor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'razao_social' => 'required|string',
            'cnpj' => 'required|string|unique:fornecedores,cnpj,' . $id,
        ]);

        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->update([
            'nome' => $request->nome,
            'razao_social' => $request->razao_social,
            'cnpj' => $request->cnpj,
        ]);

        return redirect('/fornecedores')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect('/fornecedores')->with('success', 'Fornecedor excluído com sucesso!');
    }
}
