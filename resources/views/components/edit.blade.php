@extends('layouts.template')
@section('content')   

<a href="/componentes" class="btn ease">Volver a Repuestos</a>
<div class="flex flex-col gap-5">
    <div class="flex justify-between w-full ">
        <div class="flex items-center gap-2.5">
            <h1 class="text-[24px] font-bold">Vista previa</h1>
        </div>
        <form action="/componentes/{{$component->id}}" method="POST" class="flex gap-5">
            <a href="/componentes/{{$component->id}}/edit"
                class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Editar
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="m19.71 8.04l-2.34 2.33l-3.75-3.75l2.34-2.33c.39-.39 1.04-.39 1.41 0l2.34 2.34c.39.37.39 1.02 0 1.41M3 17.25L13.06 7.18l3.75 3.75L6.75 21H3zM16.62 5.04l-1.54 1.54l2.34 2.34l1.54-1.54zM15.36 11L13 8.64l-9 9.02V20h2.34z" />
                </svg>
            </a>
            <button href="/componentes/{{$component->id}}/edit"
                class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Eliminar
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m18 9l-.84 8.398c-.127 1.273-.19 1.909-.48 2.39a2.5 2.5 0 0 1-1.075.973C15.098 21 14.46 21 13.18 21h-2.36c-1.279 0-1.918 0-2.425-.24a2.5 2.5 0 0 1-1.076-.973c-.288-.48-.352-1.116-.48-2.389L6 9m7.5 6.5v-5m-3 5v-5m-6-4h4.615m0 0l.386-2.672c.112-.486.516-.828.98-.828h3.038c.464 0 .867.342.98.828l.386 2.672m-5.77 0h5.77m0 0H19.5"/></svg>
            </button>
        </form>
    </div>
    <div class="w-full h-[0.5px] bg-preview"></div>
    <form class="grid gap-10">
        <div class="flex flex-col">
            <div class="style-preview items-center">
                <label>Repuesto</label>
                <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
            </div>
            <div class="style-preview">
                <label>Serial:</label>
                <input type="text" disabled value="{{$component->serial}}">
            </div>
            <div class="style-preview">
                <label>Descripcion:</label>
                <input type="text" disabled value="{{$component->description}}">
            </div>
            <div class="style-preview">
                <label>Marca:</label>
                <input type="text" disabled value="{{$component->brand}}">
            </div>
            <div class="style-preview">
                <label>Tipo:</label>
                <input type="text" disabled value="{{$component->type}}">
            </div>
            <div class="style-preview">
                <label>Precio:</label>
                <input type="text" disabled value="{{$component->price}}">
            </div>
        </div>
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