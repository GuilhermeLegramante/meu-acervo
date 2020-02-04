<?php

use Illuminate\Database\Seeder;
use App\Livro;

class LivrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Livro::create([
             'titulo'  => 'Título do Livro 01',
             'autor' => 'Fulano de Tal', 
             'dataAquisicao'  => '2019-09-02',
             'genero' => 'Romance',
             'valor' => 20,
             'observacoes' => 'Algumas observações sobre o livro...',
             'lido' => 'sim',
             'tipo' => 'fisico',
             'sinopse' => 'Sinopse do livro blá, blá, blá, mi mi mi ...',
             ]);
    }
}

