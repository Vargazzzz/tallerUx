@extends('layouts.template')
@section('title', 'Editar cliente')
@section('content')
    <a href="/clientes" class="btn ease">Volver a Clientes</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full">
            <div class="flex justify-between w-full ">
                <div class="flex items-center gap-2.5">
                    <h1 class="text-[24px] font-bold">Vista previa</h1>
                </div>
            </div>
            <form action="/clientes/{{ $client->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn">Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <form action="/clientes/{{ $client->id }}" method="POST" class="grid grid-cols-2 gap-10">
        @csrf

        @method('PUT')
        <!-- col 1 -->
        <div class="flex flex-col justify-between">
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" name="name" value="{{old('name', $client->name)}}" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Cedula:</label>
                    <input type="text" name="ci" value="{{old('name', $client->ci)}}" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" name="phone" value="{{old('name', $client->phone)}}" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" name="email" value="{{old('name', $client->email)}}" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Direccion:</label>
                    <input type="text" name="location" value="{{old('name', $client->location)}}" class="outline-none">
                </div>
            </div>
        </div>
        <!-- col 2 -->
        <div>
            <div>
                <div class="style-preview items-center">
                    <label>Bicicleta</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>SKU:</label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Modelo:</label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Marca:</label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Tipo:</label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Color:</label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Ultima orden: </label>
                    <input type="text" class="outline-none">
                </div>
                <div class="style-preview">
                    <label>Fecha: </label>
                    <input type="text" class="outline-none">
                </div>
            </div>
        </div>
        <div class="flex justify-end gap-5">
            {{-- <a href="#" class="btn">Servicios
                <img src="{{ asset('/images/add.svg') }}">
            </a> --}}
            <button type="submit" class="btn">
                Guardar
                <img src="{{ asset('/images/save.svg') }}">
            </button>
        </div>
    </form>
    {{-- <span class="h-[1px] bg-black"></span> --}}
    <div class="flex flex-col">
        <div class="style-preview items-center">
            <p>Ordenes</p>
            <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
        </div>
        <div class="flex border-b gap-2.5 border-black py-3 mb-4">
            <label>1.</label>
            <p>ajsdfhbjkhdsf</p>
        </div>
        
    </div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>formulario editar cliente</h1>

    <form action="/clientes/{{$client->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >cedula</label>
        <input type="number" name="ci" value="{{old('ci',$client->ci)}}">

        @error('ci')
            <p>{{$message}}</p>
        @enderror

        <label >nombre y apellido</label>
        <input type="text" name="name" value="{{old('name', $client->name)}}">

        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label >telefono</label>
        <input type="text" name="phone" value="{{old('phone', $client->phone)}}">

        @error('phone')
            <p>{{$message}}</p>
        @enderror

        <label >correo</label>
        <input type="text" name="email" value="{{old('email', $client->email)}}">

        @error('email')
            <p>{{$message}}</p>
        @enderror

        <label >locacion</label>
        <input type="text" name="location" value="{{old('location',$client->location)}}">

        @error('location')
            <p>{{$message}}</p>
        @enderror
    
        <button type="submit">modificar</button>


</body>
</html> --}}
