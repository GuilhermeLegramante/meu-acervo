<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    private $user;


    public function __construct(User $user)
    {
        $this->user = $user;          
        $this->middleware('auth');
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = $this->user->all();    
        return view('home', compact('users'));
    }

    public function teste()
    {
        $nome = "Guilherme";
        $nome2 = "Guilherme";

        //dd($nome);
        // Passa a variável pra view
        return view('teste', compact('nome', 'nome2'));
    }
}
