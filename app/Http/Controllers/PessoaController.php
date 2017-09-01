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

    function delete($id){
        $pessoa=Pessoa::find($id);
        return view('pessoa.delete', ['pessoa'=>$pessoa]);
    }

    function destroy(Request $request){
        Pessoa::find($request->get('id'))->delete();
        return redirect()->route('agenda.index');
    }
}