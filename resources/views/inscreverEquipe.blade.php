<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Criar Torneio</title>
</head>
<body>
    <br><br>
    <div class="container">

        <h1><a href="{{route('home')}}">Futebol</a></h1>


        <h3>Inscrever Equipe</h3>

        <form action="{{route('grava_equipe')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
                {!! csrf_field() !!}
            <div class="form-group">
                <label>Nome do time</label>
                <div class="row">
                    <input type="text" name="nome_time" required >
                </div>
            </div>

            <div class="form-group">
                <label>País</label>
                <div class="row">
                    <input type="text" value="{{$torneio->pais_torneio}}" disabled required>
                    <input type="text" name="pais" value="{{$torneio->pais_torneio}}" hidden required>
                </div>

            </div>
            <!-- id do torneio escondido -->
            <div class="form-group" hidden>
                <div class="row">
                    <input type="text" name="torneio_id" value="{{$torneio->id}}">
                </div>

            </div>


            <a href="{{url()->previous()}}" class="btn btn-default">Voltar</a>

            <button type="submit" class="btn btn-primary">Inscrever</button>

            <div>
                <div>@if (!isset($msg))
                    
                    @else
                        {{$msg}}    
                    @endif
                </div>
            </div>

        </form>

    </div>
</body>
</html>
