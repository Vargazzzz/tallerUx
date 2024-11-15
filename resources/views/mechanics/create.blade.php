<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>formulario nuevo mecanico</h1>

    {{--@if ($errors->any())
        <div>
            <h2>errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif--}}

    <form action="/mecanico" method="POST">

        @csrf

        <label >cedula</label>
        <input type="number" name="ci" value="{{old('ci')}}">

        @error('ci')
            <p>{{$message}}</p>
        @enderror

        <label >nombre y apellido</label>
        <input type="text" name="name" value="{{old('name')}}">

        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label >telefono</label>
        <input type="text" name="phone" value="{{old('phone')}}">

        @error('phone')
            <p>{{$message}}</p>
        @enderror

        <label >correo</label>
        <input type="text" name="email" value="{{old('email')}}">

        @error('email')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">crear mecanico</button>
    </form>
</body>
</html>