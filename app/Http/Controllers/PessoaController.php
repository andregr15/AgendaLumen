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
use Illuminate\Http\Request;

class PessoaController extends Controller{

    function create(){
        return view('pessoa.create');
    }

    function store(Request $request){
        $validator = Validator::make($request->all(),
            [
                'nome' => 'required|min:3|max:255|unique:pessoas',
                'apelido' => 'required|min:2|max:50',
                'sexo' => 'required'
            ]);

        if($validator->fails()){
            return view('pessoa.create', ['errors' => $validator->errors(), 'old' => $request->all()]);
        }

        $pessoa = Pessoa::create($request->all());

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    function delete($id){
        $pessoa = Pessoa::find($id);
        return view('pessoa.delete', ['pessoa'=>$pessoa]);
    }

    function destroy(Request $request){
        Pessoa::find($request->get('id'))->delete();
        return redirect()->route('agenda.index');
    }

    function edit($id){
        $pessoa = Pessoa::find($id);
        return view('pessoa.edit', ['pessoa'=>$pessoa]);
    }

    function update(Request $request){
        $pessoa = Pessoa::find($request->id);
        $pessoa->fill($request->all());

        $validator = Validator::make($request->all(),
            [
                'nome' => 'required|min:3|max:255|unique:pessoas,nome,'.$pessoa->id,
                'apelido' => 'required|min:2|max:50',
                'sexo' => 'required'
            ]);

        if($validator->fails()){
            return view('pessoa.edit', ['errors' => $validator->errors(), 'pessoa' => $pessoa]);
        }

        $pessoa->save();
        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
}