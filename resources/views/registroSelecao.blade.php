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
        <form action="{{route('gravaSelecao')}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            {!! csrf_field() !!}
            <div>
                <label>Nome da seleção</label>
                <div class="row">
                    <input type="text" name="nome_selecao" required>
                </div>
            </div>

            <br>
            <div>
                <div class="row">
                    <input type="submit" value="Registrar Seleção" class="btn btn-success">
                </div>
            </div>

        </form>




    </div>
</body>
</html>
