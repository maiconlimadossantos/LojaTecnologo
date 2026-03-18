<?php

namespace App\Http\Controllers;
use App\Models\ProdutoModel;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

=======
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1

class ProdutoController extends Controller
{
    public function index()
    {
        return view('cadastrar_produtos');
    }

     public function create()
    {
<<<<<<< HEAD

=======
       
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
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
<<<<<<< HEAD
            return redirect()->route('produtos.show', ['id' => $produto->id]);
=======
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
     }

     public function show($id)
     {
        $db = new ProdutoModel();
        $produto = $db->find($id);
<<<<<<< HEAD
        return view('Listar_produto', ['produto' => $produto]);

=======
        return view('produtos.show', ['produto' => $produto]); 
        
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
     }

     public function edit($id)
     {
        $db = new ProdutoModel();
        $produto = $db->find($id);
<<<<<<< HEAD
        return view('Editar_produto', ['produto' => $produto]);
=======
        return view('produtos.edit', ['produto' => $produto]);
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
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
<<<<<<< HEAD
        return redirect()->route('Editar_produto', ['id' => $produto->id]);
=======
        return redirect()->route('produtos.show', ['id' => $produto->id]);
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
     }

     public function destroy($id)
     {
        $produto = ProdutoModel::find($id);
        $produto->delete();
<<<<<<< HEAD
        return redirect()->route(  'produtos.index');
=======
        return redirect()->route('produtos.index'); 
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1
     }
}
