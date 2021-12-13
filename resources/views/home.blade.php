<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Futebol</title>
    
</head>
<body>
    <div class="container">
        <h1>Futebol</h1>
        <div>
            <h3>Torneios</h3>

            <!-- Mostra todos os torneios -->
            @foreach ($torneios as $torneio)
                <!-- cada torneio tem um id, cada torneio tem um botão responsavel de mostrar os detalhes deste torneio -->
                 <a href="{{route('acessoTorneio', ['id' => $torneio->id])}}" type="button" class="btn btn-primary">{{$torneio->nome_torneio}}</a>
                 <br>
                 <br>
            @endforeach
        </div>

        <br>
        <br>
        <br>
        <br>

        <div>
            <a href="{{route("create")}}" role="button" class="btn btn-success">Cadastrar Torneio</a>
        </div>
    </div>
</body>
</html>