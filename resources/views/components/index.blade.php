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
    <h1>mostrar componentes</h1>

    <a href="/componentes/crear">Nuevo componente</a>

    <ul>
        @foreach ($components as $component)
            <li>
                <a href="/componentes/{{$component->id}}">
                    {{$component->description}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$components->links()}}
</body>
</html>