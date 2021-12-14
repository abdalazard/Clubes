<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Torneio</title>
    <style>
        table, th, td {
          border: 1px solid black;
        }

        th, td {
          padding: 10px;
        }
        </style>
</head>
<body>


    <div class="container">
        <h1><a href="{{route('home')}}">Futebol</a></h1>
            <div>
                <h4>Detalhes:</h4>
                <br><br>
                <div>
                    <h5>{{$torneio->nome_torneio}}</h5>
                    <p>País: {{$torneio->pais_torneio}}</p>
                </div>
            </div>
            <br>
            <div>
                <h5>Equipes inscritas</h5>
        <!-- Listo as equipes inscritas neste torneio -->

                    <table>
                            <tr>
                                <th>Time</th>
                                <th>Elenco</th>
                                <th>Excluir Time</th>
                            </tr>

                            @foreach ($equipes as  $equipe)
                            <tr>
                                <td>{{$equipe->nome_time}}</td>
                                <td><a href="{{route('detalheTime', ['id_time' => $equipe->id])}}" class="btn btn-primary">Ver time</a></td>
                                <td><a href="{{route('excluirTime', ['id_time' => $equipe->id])}}" class="btn btn-danger">Excluir time</a></td>
                            </tr>

                            @endforeach


                    </table>


            </div>
            <br>
            <br>
            <a href="{{url()->previous()}}" class="btn btn-default">Voltar</a>
            <a href="{{route('inscreverEquipe', ['id' => $torneio->id ])}}" class="btn btn-success">Inscrever Time</a>

        </div>
</body>
</html>
