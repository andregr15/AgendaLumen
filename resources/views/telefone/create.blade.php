@extends('layout')

@section('content')
    <div class="col-md-6">
        <h4>Novo telefone para o contato {{$pessoa->nome . ' - ' . $pessoa->apelido}}</h4>
        <form action="{{route('telefone.store', ['pessoaId'=>$pessoa->id])}}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="descrição" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <input type="text" name="descrição" class="form-control" id="descrição" placeholder="Descrição" maxlength="50" value="@if(isset($old)&& isset($old['descricao'])){{$old['descricao']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <label for="codpaís" class="col-sm-2 control-label">Cód. País</label>
                <div class="col-sm-4">
                    <input type="text" name="codpaís" class="form-control" id="codpaís" placeholder="Código do país" value="@if(isset($old)&& isset($old['codpaís'])){{$old['codpaís']}}@endif">
                </div>

                <label for="ddd" class="col-sm-2 control-label">DDD</label>
                <div class="col-sm-4">
                    <input type="text" name="ddd" class="form-control" id="ddd" placeholder="DDD" maxlength="2" value="@if(isset($old)&& isset($old['ddd'])){{$old['ddd']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <label for="prefixo" class="col-sm-2 control-label">Prefixo</label>
                <div class="col-sm-4">
                    <input type="text" name="prefixo" class="form-control" id="prefixo" placeholder="Prefixo" value="@if(isset($old)&& isset($old['prefixo'])){{$old['prefixo']}}@endif">
                </div>

                <label for="sufixo" class="col-sm-2 control-label">Sufixo</label>
                <div class="col-sm-4">
                    <input type="text" name="sufixo" class="form-control" id="sufixo" placeholder="Sufixo" value="@if(isset($old)&& isset($old['sufixo'])){{$old['sufixo']}}@endif">
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