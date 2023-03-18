<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Futebol</title>
    <style>
        h1 {
            font-size: 30px;
            text-align: center;
            justify-content: center;
        }
        .box {
            background-color: green;
            color: white;
            border-radius: 10px;
            margin: 20px;
        }
        hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 3px;
            background-color:#fff;
        }
        .btn-login {
            color: white;
            background-color: blue;
            margin: 30px;
            padding: 10px;
            border-radius: 10px;
            margin-block-end: auto;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-8">
                <h1>Clubes App</h1>
            </div>
            <div class="col-4">
                <a href="{{url('login')}}" class="btn-login">Login</a>
            </div>
        </div>
    
        <div class="box">
            <div>
                <h1>Artilheiros</h1>
                @foreach ($players as $player)
                    <h1>{{$player->id}}</h1>
                @endforeach
            </div>
            <hr>
            <div>
                <h1>Clubes</h1>
            </div>
        </div>
    </div>    
</body>
</html>
