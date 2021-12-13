<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Torneio</title>
</head>
<body>


    <div class="container">
        <h1>Futebol</h1>
            <div>
                <h4>Detalhes:</h4>
                <br><br>
                <div>
                    <h5>{{$torneio->nome_torneio}}</h5>
                    <p>País: {{$torneio->pais_torneio}}</p>
                </div>
            </div>
    </div>
</body>
</html>