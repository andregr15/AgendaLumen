<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 01/09/2017
 * Time: 09:59
 */

namespace TecnoAgenda\Http\Controllers;

use TecnoAgenda\Entities\Pessoa;
use TecnoAgenda\Entities\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller {

    function delete($id){
        $telefone = Telefone::find($id);
        $pessoa =$telefone->pessoa;
        return view('telefone.delete', ['telefone'=>$telefone, 'pessoa'=>$pessoa]);
    }

    function destroy(Request $request){
        $telefone = Telefone::find($request->get('id'));
        $pessoa = array($telefone->pessoa);
        $telefone->delete();
        return view('agenda', ['pessoas'=>$pessoa]);
    }
}