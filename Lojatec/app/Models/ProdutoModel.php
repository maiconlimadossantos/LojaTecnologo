<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos_da_tabela';

    protected $fillable = [
        'nome',
        'descricao',
        'preco',
        'quantidade',
        'data_de_validade',
    ];

}
