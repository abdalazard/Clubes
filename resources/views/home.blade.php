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
        <h1><a href="{{route('home')}}">Futebol</a></h1>
        <div>
            <h3>Torneios</h3>

            <!-- Mostra todos os torneios -->
                <table>
                    <tr>
                        <th>Torneio</th>
                        <th>Exclusão</th>

                    </tr>

                @foreach ($torneios as $torneio)
                    <tr>
                        <!-- cada torneio tem um id, cada torneio tem um botão responsavel de mostrar os detalhes deste torneio -->
                        <td><a href="{{route('acessoTorneio', ['id' => $torneio->id])}}" type="button" class="btn btn-primary">{{$torneio->nome_torneio}}</a></td>
                        <td><a  href="{{route('excluirTorneio', ['id_torneio' => $torneio->id])}}" type="button" class="btn btn-danger">Excluir Torneio</a></td>
                        <br>
                        <br>
                    </tr>
                @endforeach
            </table>
        </div>

        <br>
        <br>
        <br>
        <br>

        <div>
            <a href="{{route("criartorneio")}}" role="button" class="btn btn-success">Cadastrar Torneio</a>
            
        </div>
    </div>
</body>
</html>
