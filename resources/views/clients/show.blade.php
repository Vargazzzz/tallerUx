@extends('layouts.template')
@section('content')
    <a href="/clientes" class="btn ease">Volver a Clientes</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <div class="flex gap-5">
                <a href="/clientes/{{ $client->id }}/edit"
                    class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Editar
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="m19.71 8.04l-2.34 2.33l-3.75-3.75l2.34-2.33c.39-.39 1.04-.39 1.41 0l2.34 2.34c.39.37.39 1.02 0 1.41M3 17.25L13.06 7.18l3.75 3.75L6.75 21H3zM16.62 5.04l-1.54 1.54l2.34 2.34l1.54-1.54zM15.36 11L13 8.64l-9 9.02V20h2.34z" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <form class="grid grid-cols-2 gap-10">
        <!-- col 1 -->
        <div class="flex flex-col justify-between">
            <div
                class="shadow-[0px_4px_4px_rgba(0,0,0,0.3)] w-[150px] h-[170px] rounded-2xl flex justify-center items-center">
                <Icon name="bx:user" class="w-[100px] h-[100px]" />
            </div>
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" class="outline-none" disabled>
                </div>
            </div>
        </div>
        <!-- col 2 -->
        <div>
            <div class="mt-4">
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
        <a
            class="bg-black px-4 py-2 rounded-lg text-white flex gap-2 w-fit items-center transition-all duration-300 ease-in-out self-end hover:bg-black/80">Servicios
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M11 11V4h2v7h7v2h-7v7h-2v-7H4v-2z" />
            </svg>
        </a>
        <button type="button" class="btn ease self-end">
            Guardar
        </button>
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
