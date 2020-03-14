<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livro;

class LivrosController extends Controller
{

    private $livro;

    public function __construct(Livro $livro){
        $this->livro = $livro;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function teste(){

        $insert = $this->livro->create([
           'titulo'  => 'Título do Livro 02',
           'autor' => 'Fulano de Tal', 
           'dataAquisicao'  => '2019-09-02',
           'genero' => 'Romance',
           'valor' => 20,
           'observacoes' => 'Algumas observações sobre o livro...',
           'lido' => 'sim',
           'tipo' => 'fisico',
           'sinopse' => 'Sinopse do livro blá, blá, blá, mi mi mi ...',
       ]);

        if ($insert){
            return "Inserido com sucesso ID: {$insert->id}";
        } else {
            return 'Deu ruim';
        }
    }

    public function testeUpdate(){

        $liv = $this->livro->find(5);

        $update = $liv->update([
           'titulo'  => 'Update',
           'autor' => 'Fulano de Tal', 
           'dataAquisicao'  => '2019-09-02',
           'genero' => 'Romance',
           'valor' => 20,
           'observacoes' => 'Algumas observações sobre o livro...',
           'lido' => 'sim',
           'tipo' => 'fisico',
           'sinopse' => 'Sinopse do livro blá, blá, blá, mi mi mi ...',
       ]);

        if ($update){
            return "Alterado com sucesso";
        } else {
            return 'Deu ruim';
        }
    }
}
