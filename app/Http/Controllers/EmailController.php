<?php
namespace TecnoAgenda\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use TecnoAgenda\Entities\Pessoa;
use TecnoAgenda\Entities\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    function delete($id){
        $email = Email::find($id);
        $pessoa =$email->pessoa;
        return view('email.delete', ['email'=>$email, 'pessoa'=>$pessoa]);
    }

    function destroy(Request $request){
        $email = Email::find($request->get('id'));
        $pessoa = $email->pessoa;
        $email->delete();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    function create($pessoaId){
        $pessoa = Pessoa::find($pessoaId);
        return view('email.create', ['pessoa'=>$pessoa]);
    }

    function store(Request $request)
    {
        $pessoa = Pessoa::find($request->pessoaId);

        $validator = Validator::make($request->all(), [
            'descricao' => 'min:0|max:50',
            'email' => 'required|email'
        ]);

        if($validator->fails()){
            return view('email.create', ['errors' => $validator->errors(), 'old' => $request->all(), 'pessoa'=>$pessoa]);
        }

        $email = new Email($request->all());
        $email->pessoa_id = $pessoa->id;
        $email->save();

        $letra = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }

    function edit($id){
        $email = Email::find($id);
        return view('email.edit', ['email'=>$email]);
    }

    function update(Request $request){
        $email = Email::find($request->id);
        $email->fill($request->all());

        $validator = Validator::make($request->all(), [
            'descricao' => 'min:0|max:50',
            'email' => 'required|email|unique:emails,email,'.$email->id //passando para o validador em qual tabela, campo e id esta o nome
        ]);

        if($validator->fails()){
            return view('email.edit', ['errors' => $validator->errors(), 'email' => $email]);
        }

        $email->save();

        $letra = strtoupper(substr($email->pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
}