<?php
/**
 * Created by PhpStorm.
 * User: Desenvolvimento
 * Date: 01/09/2017
 * Time: 09:59
 */

namespace TecnoAgenda\Http\Controllers;

use Illuminate\Support\Facades\Validator;
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
        $pessoa = $telefone->pessoa;
        $telefone->delete();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    function create($pessoaId){
        $pessoa = Pessoa::find($pessoaId);
        return view('telefone.create', ['pessoa'=>$pessoa]);
    }

    function store(Request $request)
    {
        $pessoa = Pessoa::find($request->pessoaId);

        $validator = Validator::make($request->all(), [
                'descrição' => 'required|min:3|max:50',
                'codpaís' => 'required|min:2|max:5',
                'ddd' => 'required|integer',
                'prefixo' => 'required|integer',
                'sufixo' => 'required|integer',
            ]);

        if($validator->fails()){
            return view('telefone.create', ['errors' => $validator->errors(), 'old' => $request->all(), 'pessoa'=>$pessoa]);
        }

        $telefone = new Telefone($request->all());
        $telefone->pessoa_id = $pessoa->id;
        $telefone->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    function edit($id){
        $telefone = Telefone::find($id);
        return view('telefone.edit', ['telefone'=>$telefone]);
    }

    function update(Request $request){
        $telefone = Telefone::find($request->id);
        $telefone->fill($request->all());

        $validator = Validator::make($request->all(), [
            'descrição' => 'required|min:3|max:50',
            'codpaís' => 'required|min:2|max:5',
            'ddd' => 'required|integer',
            'prefixo' => 'required|integer',
            'sufixo' => 'required|integer',
        ]);

        if($validator->fails()){
            return view('telefone.edit', ['errors' => $validator->errors(), 'telefone' => $telefone]);
        }

        $telefone->save();

        $letra = strtoupper(substr($telefone->pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
}