<p></p><a href="#" class="label label-primary">Novo Telefone</a></p>
<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.destroy', ['id'=>$telefone->id]) }}" class="text-danger confirmacao-telefone"><i class="fa fa-times-circle" data-toggle="tooltip" data-placement="top" title="Apagar"></i></a>
            </td>
        </tr>
    @endforeach
</table>