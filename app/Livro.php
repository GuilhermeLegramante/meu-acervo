<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = [
        'titulo', 'autor', 'dataAquisicao', 'genero', 'valor', 'observacoes', 'lido', 'tipo',
        'sinopse',
    ];
}
