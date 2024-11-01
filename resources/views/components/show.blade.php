<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/componentes">volver a bicicletas</a>

    <h1>componente {{$component->description}}</h1>
    <p>{{$component->serial}}</p>
    <p>{{$component->description}}</p>
    <p>{{$component->brand}}</p>
    <p>{{$component->type}}</p>
    <p>{{$component->price}}</p>

    <a href="/componentes/{{$component->id}}/edit">editar componente</a>

    <form action="/componentes/{{$component->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar componente
        </button>
    </form>

</body>
</html>