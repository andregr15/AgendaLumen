@extends('layout')

@section('content')
    <div class="col-md-6">
        <form action="{{route('pessoa.store')}}" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo" value="@if(isset($old)&& isset($old['nome'])){{$old['nome']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" name="apelido" class="form-control" id="apelido" placeholder="Apelido" value="@if(isset($old)&& isset($old['apelido'])){{$old['apelido']}}@endif">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="F" @if(isset($old)&& isset($old['sexo'])){{$old['sexo'] == 'F' ? 'checked="true"' : ''}}@endif/> <i class="fa fa-female"></i><br />
                            <input type="radio" name="sexo" value="M" @if(isset($old)&& isset($old['sexo'])){{$old['sexo'] == 'M' ? 'checked="true"' : ''}}@endif//> <i class="fa fa-male"></i>
                        </label>
                    </div>
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