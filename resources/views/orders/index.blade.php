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
    <h1>mostrar ordenes</h1>

    <a href="/ordenes/crear">Nueva orden</a>

    <ul>
        @foreach ($orders as $order)
            <li>
                <a href="/ordenes/{{$order->id}}">
                    {{$order->n_order}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$orders->links()}}
</body>
</html>