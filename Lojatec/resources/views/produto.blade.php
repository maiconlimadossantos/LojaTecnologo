
@extends('layout.cadastrar_produtos')

@section('content')
<div class="container">
    <h1>Cadastro de Produtos</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome do Produto:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection