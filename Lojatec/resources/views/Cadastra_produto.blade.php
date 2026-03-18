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
    <div class="max-w-lg mx-auto bg-slate-800 p-8 rounded-xl shadow-2xl border border-slate-700">
        <h2 class="text-2xl font-bold mb-6 text-blue-400"> Cadastrar Novo Item</h2>

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