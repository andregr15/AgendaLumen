@extends('layout')

@section('content')
    @if(!isset($pessoas))
        <div class="alert alert-warning text-center">
            <strong>Contato excluído com sucesso!</strong>
        </div>
    @elseif(count($pessoas) == 0)
        <div class="alert alert-warning text-center">
            <strong>A busca não retornou resultados!</strong>
        </div>
    @else
        @foreach($pessoas as $pessoa)
            <div class="col-md-6">
                @include('partials.contato')
            </div>
        @endforeach
    @endif
@endsection