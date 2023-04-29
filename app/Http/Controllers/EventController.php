<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {
    public function index() {
        $nome = "Rubens"; //Cria uma variável
        $idade = 19;
        $arr = [10,25,30,45,50,65];
        $nomes = ["Rubens", "Maria", "José", "Jão"];
        return view('welcome', [   
            'nome' => $nome, 
            'idade' => $idade,
            'arr' => $arr,
            'nomes' => $nomes
        ]); //Dá a variál $nome acesso a página.
    }

    public function create() {
        return view('events.create'); //pode colocar "." ou "/" 
    }
}