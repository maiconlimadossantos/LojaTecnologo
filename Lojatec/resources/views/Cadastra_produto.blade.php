<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto - Lojatec</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white p-10">
    <div class="max-w-lg mx-auto bg-slate-800 p-8 rounded-xl shadow-2xl border border-slate-700">
        <h2 class="text-2xl font-bold mb-6 text-blue-400 text-center">Cadastrar Novo Item</h2>

        <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-slate-300">Nome do Equipamento</label>
                <input type="text" name="nome" required class="w-full bg-slate-700 border-none rounded p-2 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300">Descrição / Especificações</label>
                <textarea name="descricao" class="w-full bg-slate-700 border-none rounded p-2 h-24 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-slate-300">Preço (R$)</label>
                    <input type="number" name="preco" step="0.01" required class="w-full bg-slate-700 border-none rounded p-2 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-300">Quantidade</label>
                    <input type="number" name="quantidade" required class="w-full bg-slate-700 border-none rounded p-2 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300">Data de Validade / Garantia</label>
                <input type="date" name="data_de_validade" class="w-full bg-slate-700 border-none rounded p-2 focus:ring-2 focus:ring-blue-500 outline-none">
            </div>

            {{-- Usando o componente que você criou ou um botão padrão --}}

                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 transition p-3 rounded-lg font-bold uppercase tracking-wider shadow-lg">
                    Salvar no Inventário
                </button>


            <a href="{{ route('produtos.show') }}" class="block text-center text-slate-400 text-sm hover:underline mt-4">Voltar para a lista</a>
        </form>
    </div>
</body>
</html>