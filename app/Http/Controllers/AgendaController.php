<?php
namespace TecnoAgenda\Http\Controllers;

use TecnoAgenda\Entities\Pessoa;

class AgendaController extends Controller{
    
    function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }
}
