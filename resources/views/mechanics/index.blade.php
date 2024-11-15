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
    <h1>mostrar mecanicos</h1>

    <a href="/mecanico/crear">Nuevo mecanico</a>

    <ul>
        @foreach ($mechanics as $mechanic)
            <li>
                <a href="/mecanico/{{$mechanic->id}}">
                    {{$mechanic->name}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$mechanics->links()}}
    
</body>
</html>