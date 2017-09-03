<div class="panel @if($pessoa->sexo == 'F') panel-danger @else panel-info @endif">
    <div class="panel-heading">
        <h3 class="panel-title">
            <i class="@if($pessoa->sexo == 'F') fa fa-female @else fa fa-male @endif"></i>
            {{ $pessoa->apelido }}
            <span class="pull-right">
                <a href="{{ route('pessoa.edit', ['id'=>$pessoa->id]) }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                <a href="{{ route('pessoa.delete', ['id'=>$pessoa->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-times"></i></a>
            </span>
        </h3>
    </div>
    <div class="panel-body">
        <h3>{{ $pessoa->nome }}</h3>
        <!-- Nav tabs -->
        <div id="tabs">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#telefones{{$pessoa->id}}" aria-controls="telefones" role="tab" data-toggle="tab">Telefones</a></li>
                <li role="presentation"><a href="#emails{{$pessoa->id}}" aria-controls="emails{{$pessoa->id}}" role="tab" data-toggle="tab">E-mails</a></li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="telefones{{$pessoa->id}}">
                    @include('partials.telefones', ['telefones'=>$pessoa->telefones, 'pessoaId'=>$pessoa->id])
                </div>
                <div role="tabpanel" class="tab-pane fade" id="emails{{$pessoa->id}}">teste</div>
            </div>

        </div>

    </div>
</div>