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
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-blue-400"> Inventário Lojatec</h1>
            <a href="{{ route('produtos.create') }}" class="bg-green-600 hover:bg-green-500 px-4 py-2 rounded-lg">+ Novo</a>
        </div>

        <div class="bg-slate-800 rounded-xl overflow-hidden shadow-xl border border-slate-700">
            <table class="w-full text-left">
                <thead class="bg-slate-700 text-blue-300 uppercase text-xs">
                    <tr>
                        <th class="p-4">Produto</th>
                        <th class="p-4">Descrição</th>
                        <th class="p-4">Preço</th>
                        <th class="p-4">Quantidade</th>
                        <th class="p-4 text-center">data de validade</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-700">
                    @foreach($produtos as $p)
                    <tr class="hover:bg-slate-750 transition">
                        <td class="p-4">
                            <div class="font-bold">{{ $p->nome }}</div>
                            <div class="text-xs text-slate-400">{{ $p->descricao }}</div>
                        </td>
                        <td class="p-4 text-green-400 font-mono">R$ {{ number_format($p->preco, 2, ',', '.') }}</td>
                        <td class="p-4">{{ $p->quantidade }} un.</td>
                       <td class="p-4 text-center">{{ $p->data_de_validade ? \Carbon\Carbon::parse($p->data_de_validade)->format('d/m/Y') : 'N/A' }}</td>
                        <td class="p-4 flex justify-center gap-3">
                            <a href="{{ route('produtos.edit', $p->id) }}" class="bg-yellow-600 p-2 rounded hover:bg-yellow-500 text-xs">Editar</a>

                            <form action="{{ route('produtos.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Excluir item?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="bg-red-600 p-2 rounded hover:bg-red-500 text-xs">Excluir</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>