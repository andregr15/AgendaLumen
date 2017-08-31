<?php
namespace TecnoAgenda\Http\Controllers;

use Illuminate\Http\Request;
use TecnoAgenda\Entities\Pessoa;
use TecnoAgenda\Entities\Telefone;

class AgendaController extends Controller{
    
    function index($letra = "A"){
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', ['pessoas'=>$pessoas, 'letras'=>$this->getLetras()]);
    }

    function pesquisa(Request $request){
        $pessoas = Pessoa::where('apelido', 'like', '%'.$request->get('pesquisa').'%')->orWhere('nome', 'like', '%'.$request->get('pesquisa').'%')->get();
        return view('agenda', ['pessoas'=>$pessoas, 'letras'=>$this->getLetras()]);
    }

    private function getLetras(){
        return Pessoa::selectRaw('substr(apelido, 1,1) as first')->distinct()->orderBy('first')->pluck('first');
    }

    function excluir(Request $request){
        Pessoa::find($request->get('id'))->delete();
        return view('agenda', ['pessoas'=>null, 'letras'=>$this->getLetras()]);
    }

    function excluirTelefone(Request $request){
        $telefone = Telefone::find($request->get('id'));
        $pessoa = array(Pessoa::find($telefone->pessoa_id));
        $telefone->delete();

        return view('agenda', ['pessoas'=>$pessoa, 'letras'=>$this->getLetras()]);
    }
}
