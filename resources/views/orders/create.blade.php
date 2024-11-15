<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>formulario nueva orden</h1>

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

    <form action="/ordenes" method="POST">

        @csrf

        <label ># Orden</label>
        <input type="number" name="n_order" value="{{old('n_order')}}">

        @error('n_order')
            <p>{{$message}}</p>
        @enderror

        <label >ci cliente</label>
        <input type="number" name="ci_client" value="{{old('ci_client')}}">

        @error('ci_client')
            <p>{{$message}}</p>
        @enderror

        <label >ci mecanico</label>
        <input type="number" name="ci_mechanic" value="{{old('ci_mechanic')}}">

        @error('ci_mechanic')
            <p>{{$message}}</p>
        @enderror

        <label >serial bicicleta</label>
        <input type="text" name="serial" value="{{old('serial')}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >estado</label>
        <input type="text" name="status" value="{{old('status')}}">

        @error('status')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">crear orden</button>

        
   </form>

</body>
</html>