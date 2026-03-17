<?php

namespace App\Http\Controllers;
use App\Models\ProdutoModel;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('cadastrar_produtos');
    }

     public function create()
    {
       
        return view('produtos.create');
     }

     public function store(Request $request)
     {
         $produto = new ProdutoModel();
            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->preco = $request->input('preco');
            $produto->quantidade = $request->input('quantidade');
            $produto->data_de_validade = $request->input('data_de_validade');
            $produto->save();
     }

     public function show($id)
     {
        $db = new ProdutoModel();
        $produto = $db->find($id);
        return view('produtos.show', ['produto' => $produto]); 
        
     }

     public function edit($id)
     {
        $db = new ProdutoModel();
        $produto = $db->find($id);
        return view('produtos.edit', ['produto' => $produto]);
     }

     public function update(Request $request, $id)
     {
        $produto = ProdutoModel::find($id);
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->data_de_validade = $request->input('data_de_validade');
        $produto->save();
        return redirect()->route('produtos.show', ['id' => $produto->id]);
     }

     public function destroy($id)
     {
        $produto = ProdutoModel::find($id);
        $produto->delete();
        return redirect()->route('produtos.index'); 
     }
}
