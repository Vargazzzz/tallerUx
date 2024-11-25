@extends('layouts.template')
@section('content')
    <a href="/componentes" class="btn ease">Volver a Repuestos</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form action="/componentes/{{ $component->id }}" method="POST">
                <button href="/componentes/{{ $component->id }}/edit" class="btn">Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>

        <form class="flex flex-col">
            <div class="style-preview items-center">
                <label>Repuesto</label>
                <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
            </div>
            <div class="style-preview">
                <label>Serial:</label>
                <input type="text" value="{{ $component->serial }}">
            </div>
            <div class="style-preview">
                <label>Descripcion:</label>
                <input type="text" value="{{ $component->description }}">
            </div>
            <div class="style-preview">
                <label>Marca:</label>
                <input type="text" value="{{ $component->brand }}">
            </div>
            <div class="style-preview">
                <label>Tipo:</label>
                <input type="text" value="{{ $component->type }}">
            </div>
            <div class="style-preview">
                <label>Precio:</label>
                <input type="text" value="{{ $component->price }}">
            </div>
            <button type="button" class="btn mt-5 self-end">
                Guardar
                <img src="{{ asset('/images/save.svg') }}">
            </button>
        </form>
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
    
    <h1>formulario editar component</h1>

    <form action="/componentes/{{$component->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >serial</label>
        <input type="text" name="serial" value="{{old('serial',$component->serial)}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >descripcion</label>
        <input type="text" name="description" value="{{old('description', $component->description)}}">

        @error('description')
            <p>{{$message}}</p>
        @enderror

        <label >marca</label>
        <input type="text" name="brand" value="{{old('brand', $component->brand)}}">

        @error('brand')
            <p>{{$message}}</p>
        @enderror

        <label >tipo</label>
        <input type="text" name="type" value="{{old('type', $component->type)}}">

        @error('type')
            <p>{{$message}}</p>
        @enderror
        
        <label >precio</label >
        <input type="number" step="0.01" name="price" value="{{old('price',$component->price)}}">
        
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">modificar</button>


</body>
</html> --}}
