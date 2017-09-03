@extends('layout')

@section('content')
    <div class="col-md-6">
        <h4>Novo e-mail para o contato {{$pessoa->nome . ' - ' . $pessoa->apelido}}</h4>
        <form action="{{route('email.store', ['pessoaId'=>$pessoa->id])}}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" maxlength="50" value="@if(isset($old)&& isset($old['descricao'])){{$old['descricao']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="@if(isset($old)&& isset($old['email'])){{$old['email']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        @if (isset($errors) && $errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection