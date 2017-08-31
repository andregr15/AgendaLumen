<?php
namespace TecnoAgenda\Http\Controllers;

use TecnoAgenda\Entities\Pessoa;

class AgendaController extends Controller{
    
    function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();

        $letras = Pessoa::selectRaw('substr(apelido, 1,1) as first')->distinct()->orderBy('first')->pluck('first');

        return view('agenda', ['pessoas'=>$pessoas, 'letras'=>$letras]);
    }
}
