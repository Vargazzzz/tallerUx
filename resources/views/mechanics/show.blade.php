<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/mecanico">volver a mecanico</a>

    <h1>mecanico {{$mechanic->name}}</h1>
    <p>{{$mechanic->ci}}</p>
    <p>{{$mechanic->phone}}</p>
    <p>{{$mechanic->email}}</p>

    {{--@foreach ($client->bicycles as $bicycle)
    <p>{{$bicycle->serial}}</p>
    @endforeach--}}

    <a href="/mecanico/{{$mechanic->id}}/edit">editar mecanico</a>

    <form action="/mecanico/{{$mechanic->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar mecanico
        </button>
    </form>

</body>
</html>