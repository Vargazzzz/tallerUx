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
    <h1>mostrar bicicletas</h1>

    <a href="/bicicletas/crear">Nueva bicicleta</a>

    <ul>
        @foreach ($bicycles as $bicycle)
            <li>
                <a href="/bicicletas/{{$bicycle->id}}">
                    {{$bicycle->model}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$bicycles->links()}}
</body>
</html>