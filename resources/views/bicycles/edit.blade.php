@extends('layouts.template')
@section('content')
    <a href="/bicicletas" class="btn ease">Volver a bicicletas</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <div class="grid grid-rows-[170px_1fr] ">
        <div class="shadow-[0px_4px_4px_rgba(0,0,0,0.3)] w-[170px] h-[170px] rounded-2xl flex justify-center items-center">
        </div>
        <form action="/bicicletas/{{ $bicycle->id }}" method="POST" class="grid grid-cols-2 gap-10 mt-4">
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
            <div class="flex flex-col gap-5">
                <div>
                    <div class="style-preview items-center">
                        <label>Cliente</label>
                    </div>
                    <div class="style-preview">
                        <label>Nombre:</label>
                        <input type="text" class="outline-none">
                    </div>
                    <div class="style-preview">
                        <label>Teléfono:</label>
                        <input type="text" class="outline-none">
                    </div>
                    <div class="style-preview">
                        <label>Correo:</label>
                        <input type="text" class="outline-none">
                    </div>
                </div>
                <button type="button" class="btn ease self-end">
                    Guardar
                </button>
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
    
    <h1>formulario editar bicicleta</h1>

    <form action="/bicicletas/{{$bicycle->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >serial</label>
        <input type="text" name="serial" value="{{old('serial',$bicycle->serial)}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >tipo</label>
        <input type="text" name="type" value="{{old('type', $bicycle->type)}}">

        @error('type')
            <p>{{$message}}</p>
        @enderror

        <label >modelo</label>
        <input type="text" name="model" value="{{old('model', $bicycle->model)}}">

        @error('model')
            <p>{{$message}}</p>
        @enderror

        <label >marca</label>
        <input type="text" name="brand" value="{{old('brand', $bicycle->brand)}}">

        @error('brand')
            <p>{{$message}}</p>
        @enderror

        <label >color</label>
        <input type="text" name="color" value="{{old('color',$bicycle->color)}}">

        @error('color')
            <p>{{$message}}</p>
        @enderror
    
        <label >id cliente</label>
        <input type="number" name="client_id" value="{{old('client_id',$bicycle->client_id)}}">

        @error('client_id')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">modificar</button>


</body>
</html> --}}
