<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/clientes">volver a clientes</a>

    <h1>cliente {{$client->name}}</h1>
    <p>{{$client->ci}}</p>
    <p>{{$client->phone}}</p>
    <p>{{$client->email}}</p>
    <p>{{$client->location}}</p>

    @foreach ($client->bicycles as $bicycle)
    <p>{{$bicycle->serial}}</p>
    @endforeach

    <a href="/clientes/{{$client->id}}/edit">editar cliente</a>

    <form action="/clientes/{{$client->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar cliente
        </button>
    </form>

</body>
</html>