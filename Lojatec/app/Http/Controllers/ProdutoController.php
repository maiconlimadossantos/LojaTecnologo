<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Lista todos os produtos
    public function index()
    {
        return view('Cadastra_produto');
    }

    // Abre o formulário de criação
    public function create()
    {
       $produtos = ProdutoModel::all();
        return view('Cadastra_produto', compact('produtos'));
    }

    // Salva o produto no banco
    public function store(Request $request)
    {
        $produto = new ProdutoModel();
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->data_de_validade = $request->input('data_de_validade');
        $produto->save();

        return redirect()->route('Cadastra_produto')->with('success', 'Produto cadastrado!');
    }

    // Mostra um produto específico
    public function show($id)
    {
        $produto = ProdutoModel::findOrFail($id);
        return view('Listar_produto', compact('produto'));
    }

    // Abre o formulário de edição
    public function edit($id)
    {
        $produto = ProdutoModel::findOrFail($id);
        return view('Editar_produto', compact('produto'));
    }

    // Atualiza o produto
    public function update(Request $request, $id)
    {
        $produto = ProdutoModel::findOrFail($id);
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->data_de_validade = $request->input('data_de_validade');
        $produto->save();

        return redirect()->route('Cadastra_produto')->with('success', 'Produto atualizado!');
    }

    // Deleta o produto
    public function destroy($id)
    {
        $produto = ProdutoModel::findOrFail($id);
        $produto->delete();

        return redirect()->route('Listar_produto')->with('success', 'Produto removido!');
    }

}