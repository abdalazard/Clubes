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
        <h1><a href="{{route('home')}}">Futebol</a></h1>
        <h4>Cadastro de jogador para o {{$time->nome_time}}</h4>

        <br>  <br>  <br>
        <form action="{{route('grava_jogador')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {!! csrf_field() !!}

                <label>Nome jogador</label>
                <div class="row">
                    <input type="text" name="nome_jogador" required>
                </div>
                <br>

                <label>Posição</label>
                <div class="row">
                    <input type="text" name="posicao" required>
                </div>
                <br>

                <label>Camisa</label>
                <div class="row">
                    <input type="text" name="camisa" required>
                </div>
                <br>

                <label>País</label>
                <div class="row">
                    <input type="text" name="pais" required>
                </div>
                <br>

                <label>Time</label>
                <div class="row">
                    <input type="text" name="" value="{{$time->nome_time}}">
                </div>
                <div class="row" hidden>
                    <input type="text" name="time_id" value="{{$time->id}}">
                </div>
                <br>

                <label>Seleção</label>
                <div class="row">
                    <input type="text" name="selecao" placeholder="Somente se convocado">
                </div>
                <br><br>

            <a href="{{url()->previous()}}" class="btn btn-default">Voltar</a>
            <input type="submit" class="btn btn-success" value="Registrar jogador no clube">

        </form>


    </div>
</body>
</html>
