@extends('layout')

@section('content')
   <div class="col-md-6">
       <h3>Deseja realmente apagar o contato {{$pessoas->apelido}}?</h3>
       <form action="#" method="post">
           <input type="hidden" name="_method" value="DELETE"/>
           <button type="submit" class="btn btn-danger">Apagar</button>
           <a href="{{route('agenda.index')}}" class="btn btn-primary">Voltar</a>
       </form>
   </div>
@endsection