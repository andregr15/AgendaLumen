<p></p><a href="{{route('email.create', ['pessoaId'=>$pessoaId])}}" class="label label-primary">Novo E-mail</a></p>
<table class="table table-hover">
    @foreach($emails as $email)
        <tr>
            <td>{{ $email->descricao }}</td>
            <td>{{ $email->email }}</td>
            <td>
                <a href="{{ route('email.edit', ['id'=>$email->id]) }}" class="text-success"><i class="fa fa-pencil" data-toggle="tooltip" data-placement="top" title="Editar"></i></a>
                <a href="{{ route('email.delete', ['id'=>$email->id]) }}" class="text-danger"><i class="fa fa-times-circle" data-toggle="tooltip" data-placement="top" title="Apagar"></i></a>
            </td>
        </tr>
    @endforeach
</table>
