<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1>mostrar clientes</h1>

    <a href="/clientes/crear">Nuevo cliente</a>

    <ul>
        @foreach ($clients as $client)
            <li>
                <a href="/clientes/{{$client->id}}">
                    {{$client->name}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$clients->links()}}
    
</body>
</html>