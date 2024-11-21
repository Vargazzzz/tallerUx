<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Asignar Componentes a la Orden #{{ $order->id }}</h1>
    <form  method="POST">
        @csrf
        @foreach($components as $component)
            <div>
                <label>{{ $component->description }}</label>
                <input type="number" name="components[{{ $component->id }}]" min="0">
            </div>
        @endforeach
        <button type="submit">Asignar Componentes</button>
    </form>
</body>
</html>