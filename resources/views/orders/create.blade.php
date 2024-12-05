{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>formulario nueva orden</h1>

    {{-- @if ($errors->any())
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
    @endif --}}
{{--
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
</html> --}}

@extends('layouts.template')
@section('title', 'Crear orden')
@section('content')
    <div class="formularios flex flex-col gap-10 justify-center items-center">
        <h1 class="title text-center">Formulario nueva orden</h1>
        <form action="/ordenes" class="form w-[450px]" method="POST">
            @csrf
            <div>
                <input type="number" name="n_order" value="{{ old('n_order') }}" placeholder="# Orden">
                @error('n_order')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="number" name="ci_client" value="{{ old('ci_client') }}" placeholder="ci cliente">

                @error('ci_client')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="number" name="ci_mechanic" value="{{ old('ci_mechanic') }}" placeholder="ci mecanico">

                @error('ci_mechanic')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="serial" value="{{ old('serial') }}" placeholder="Serial bicicleta">

                @error('serial')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="status" value="{{ old('status') }}" placeholder="Estado">
                @error('status')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="/ordenes" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear orden</button>
            </div>
        </form>
    </div>
@endsection
