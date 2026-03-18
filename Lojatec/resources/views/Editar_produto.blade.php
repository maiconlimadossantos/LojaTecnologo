<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-slate-900 text-white p-10">
    <div class="max-w-lg mx-auto bg-slate-800 p-8 rounded-xl border border-yellow-600/30">
        <h2 class="text-2xl font-bold mb-6 text-yellow-500">✏️ Editar: {{ $produto->nome }}</h2>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <input type="text" name="nome" value="{{ $produto->nome }}" class="w-full bg-slate-700 rounded p-2">
            <textarea name="descricao" class="w-full bg-slate-700 rounded p-2">{{ $produto->descricao }}</textarea>

            <div class="grid grid-cols-2 gap-4">
                <input type="number" name="preco" step="0.01" value="{{ $produto->preco }}" class="w-full bg-slate-700 rounded p-2">
                <input type="number" name="quantidade" value="{{ $produto->quantidade }}" class="w-full bg-slate-700 rounded p-2">
            </div>

            <button type="submit" class="w-full bg-yellow-600 hover:bg-yellow-500 p-3 rounded-lg font-bold uppercase">Atualizar Dados</button>
            <a href="{{ route('produtos.index') }}" class="block text-center text-slate-400 mt-4 underline text-sm">Cancelar</a>
        </form>
    </div>
</body>
</html>
