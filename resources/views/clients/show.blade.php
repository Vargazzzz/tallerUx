@extends('layouts.template')
@section('title', 'Ver cliente')
@section('content')
    <a href="/clientes" class="btn ease">Volver a Clientes</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form class="flex gap-5">
                <a href="/clientes/{{ $client->id }}/edit" class="btn">Editar
                    <img src="{{ asset('/images/pencil-light.svg') }}">
                </a>
                <button class="btn">Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <form class="grid grid-cols-2 gap-10">
        <!-- col 1 -->
        <div class="flex flex-col justify-between">
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" class="outline-none" value="{{ $client->name }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Direccion:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha de creacion:</label>
                    <input type="text" class="outline-none" disabled>
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
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Modelo:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Marca:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Tipo:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Color:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Ultima orden: </label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha: </label>
                    <input type="text" class="outline-none" disabled>
                </div>
            </div>
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
        <a class="btn self-end">Servicios
            <img src="{{ asset('/images/add.svg') }}">
        </a>
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

    <a href="/clientes">volver a clientes</a>

    <h1>cliente {{$client->name}}</h1>
    <p>{{$client->ci}}</p>
    <p>{{$client->phone}}</p>
    <p>{{$client->email}}</p>
    <p>{{$client->location}}</p>

    @foreach ($client->bicycles as $bicycle)
    <p>{{$bicycle->serial}}</p>
    @endforeach

    <a href="/clientes/{{$client->id}}/edit">editar cliente</a>

    <form action="/clientes/{{$client->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar cliente
        </button>
    </form>

</body>
</html> --}}
