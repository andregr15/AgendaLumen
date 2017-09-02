
<p></p><a href="{{route('telefone.create', ['pessoaId'=>$pessoaId])}}" class="label label-primary">Novo Telefone</a></p>
<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.delete', ['id'=>$telefone->id]) }}" class="text-danger"><i class="fa fa-times-circle" data-toggle="tooltip" data-placement="top" title="Apagar"></i></a>
            </td>
        </tr>
    @endforeach
</table>
