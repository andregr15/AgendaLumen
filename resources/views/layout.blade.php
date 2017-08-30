<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- As 3 meta tags acima *devem* vir em primeiro lugar dentro do `head`; qualquer outro conteúdo deve vir *após* essas tags -->
    <title>TecnoAgenda</title>

    <link href="css/app.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="col-lg-12 page-header">
            <h1>
                TecnoAgenda<br />
                <small><i class="glyphicon glyphicon-phone-alt"> Agenda Telefônica</i></small>
                <span class="pull-right">
                    <form class="form-inline" action="#" method="post">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Pesquisar Contato...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                          </span>
                        </div><!-- /input-group -->
                    </form>
                </span>
            </h1>
        </div>

        <div class="row">
            <div class="col-lg-12">
                @foreach(range('A', 'Z') as $letra)
                    <a hfref="#" class="btn btn-primary btn-xs">{{ $letra }}</a>
                @endforeach
            </div>
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div>


    <script src="js/scripts.js"></script>
</body>
</html>