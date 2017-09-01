<?php
namespace TecnoAgenda\Http\Controllers;

use Illuminate\Http\Request;
use TecnoAgenda\Entities\Pessoa;

class AgendaController extends Controller{

    function pesquisa(Request $request){
        $pessoas = Pessoa::where('apelido', 'like', '%'.$request->get('pesquisa').'%')->orWhere('nome', 'like', '%'.$request->get('pesquisa').'%')->get();
        return view('agenda', ['pessoas'=>$pessoas]);
    }

    function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', ['pessoas'=>$pessoas]);
    }
}
