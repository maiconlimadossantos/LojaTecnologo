<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<<<<<<< HEAD
    <script src="https://cdn.tailwindcss.com"></script>
<body class="bg-slate-900 text-white p-10">
    <div class="max-w-lg mx-auto bg-slate-800 p-8 rounded-xl shadow-2xl border border-slate-700">
        <h2 class="text-2xl font-bold mb-6 text-blue-400"> Cadastrar Novo Item</h2>
=======
<body>
    <form action="{{route('produto.create')}}" method="POST">
        @csrf
        <label for="nome">Nome do produto</label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="descricao">Descrição de produto</label>
        <input type="text" name="descricao" id="descricao">
        <br>
        <label for="preco">Preço do produto</label>
        <input type="numerico" name="preco" id="preco">
        <br>
        <label for="quantidade">Quantidade de produto</label>
        <input type="numerico" name="quantidade" id="quantidade">
        <br>
        <label for="data">Data validade</label>
        <input type="data" name="data" id="data">
        <br>
>>>>>>> 1b2e9b83cd8680502b77a760110cdc2347cd04b1

        <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium">Nome do Equipamento</label>
                <input type="text" name="nome" required class="w-full bg-slate-700 border-none rounded p-2 focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium">Descrição / Especificações</label>
                <textarea name="descricao" class="w-full bg-slate-700 border-none rounded p-2 h-24"></textarea>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium">Preço (R$)</label>
                    <input type="number" name="preco" step="0.01" required class="w-full bg-slate-700 border-none rounded p-2">
                </div>
                <div>
                    <label class="block text-sm font-medium">Quantidade</label>
                    <input type="number" name="quantidade" required class="w-full bg-slate-700 border-none rounded p-2">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium">Data de Validade (Garantia)</label>
                <input type="date" name="data_de_validade" class="w-full bg-slate-700 border-none rounded p-2">
            </div>
            <x-botaoSalvar> Salvar no Inventário </x-botaoSalvar>

        </form>
    </div>
</body>

</html>