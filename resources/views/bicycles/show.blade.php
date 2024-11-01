<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/bicicletas">volver a bicicletas</a>

    <h1>bicicleta {{$bicycle->model}}</h1>
    <p>{{$bicycle->serial}}</p>
    <p>{{$bicycle->type}}</p>
    <p>{{$bicycle->model}}</p>
    <p>{{$bicycle->brand}}</p>
    <p>{{$bicycle->color}}</p>
    <p>{{$bicycle->client_id}}</p>
    <p>{{$bicycle->client->name}}</p>


    <a href="/bicicletas/{{$bicycle->id}}/edit">editar bicicleta</a>

    <form action="/bicicletas/{{$bicycle->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar bicicleta
        </button>
    </form>

</body>
</html>