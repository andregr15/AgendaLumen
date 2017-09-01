<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 01/09/2017
 * Time: 09:59
 */

namespace TecnoAgenda\Http\Controllers;

use TecnoAgenda\Entities\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller{

    function delete(Request $request){
        $pessoa=Pessoa::find($request->get('id'));

        return view('pessoa.delete', ['pessoas'=>$pessoa]);
    }

    function destroy(Request $request){
        Pessoa::find($request->get('id'))->delete();
        return view('agenda', ['pessoas'=>null]);
    }
}