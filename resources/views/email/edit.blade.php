@extends('layout')

@section('content')
    <div class="col-md-6">
        <h4>Novo e-mail para o contato {{$email->pessoa->nome . ' - ' . $email->pessoa->apelido}}</h4>
        <form action="{{route('email.update', ['id'=>$email->id])}}" method="post" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group">
                <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição" maxlength="50" value="{{$email->descricao}}">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" id="email" placeholder="E-mail" value="{{$email->email}}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Alterar</button>
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