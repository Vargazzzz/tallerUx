<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>formulario nuevo componente</h1>

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

    <form action="/componentes" method="POST">

        @csrf

        <label >Serial</label>
        <input type="text" name="serial" value="{{old('serial')}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >descripcion</label>
        <input type="text" name="description" value="{{old('description')}}">

        @error('description')
            <p>{{$message}}</p>
        @enderror

        <label >marca</label>
        <input type="text" name="brand" value="{{old('brand')}}">

        @error('brand')
            <p>{{$message}}</p>
        @enderror

        <label >tipo</label>
        <input type="text" name="type" value="{{old('type')}}">

        @error('type')
            <p>{{$message}}</p>
        @enderror

        <label >precio</label >
        <input type="number" step="0.01" name="price" value="{{old('price')}}">
    
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">crear componente</button>
    </form>
</body>
</html>