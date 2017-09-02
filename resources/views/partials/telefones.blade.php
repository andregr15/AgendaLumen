
<p></p><a href="{{route('telefone.create', ['pessoaId'=>$pessoaId])}}" class="label label-primary">Novo Telefone</a></p>
<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.edit', ['id'=>$telefone->id]) }}" class="text-success"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
                <a href="{{ route('telefone.delete', ['id'=>$telefone->id]) }}" class="text-danger"><i class="fa fa-times-circle" data-toggle="tooltip" data-placement="top" title="Apagar"></i></a>
            </td>
        </tr>
    @endforeach
</table>
