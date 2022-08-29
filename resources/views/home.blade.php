<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Futebol</title>
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
        <br>
        <h1><a href="{{route('home')}}">Futebol</a></h1>
        <br><br>

        <div>
               <table>
                   <tr>
                       <th>
                        Seleção
                       </th>

                       <th>
                        Acesso
                       </th>

                       <th>
                        Exclusão
                       </th>
                   </tr>


                   @foreach ($selecoes as $selecao)
                   <tr>
                        <td>
                            <p>{{$selecao->nome_selecao}}</p>
                        </td>
                        <td>
                            <a href="{{route('acessarSelecao', ['id' => $selecao->id])}}" class="btn btn-primary" type="button">Acessar</a>
                        </td>
                        <td>
                            <a href="{{route('excluirSelecao', ['id' => $selecao->id])}}" class="btn btn-danger" type="button">Excluir</a>
                        </td>

                   </tr>
                   @endforeach

               </table>

               <br>
               <a href="{{route('inscreverSelecao')}}" class="btn btn-success" type="button">Registrar seleção</a>
        </div>

        <br><br>

        <div>
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
                        <td><a href="{{route('excluirTorneio', ['id_torneio' => $torneio->id])}}" type="button" class="btn btn-danger">Excluir Torneio</a></td>
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
            <a href="{{route('criartorneio')}}" role="button" class="btn btn-success">Cadastrar Torneio</a>

        </div>
    </div>
</body>
</html>
