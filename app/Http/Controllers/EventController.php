<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Mateus";
        $idade = 26;

        $arr = [10,20,30,40,50];

        $nomes = ["Mateus", "Maria", "João", "Saulo"];

        return view('welcome',
        [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Desenvolvedor",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
        
        
    ;
    }
    public function create() {
        return view('events.create');
    }
}