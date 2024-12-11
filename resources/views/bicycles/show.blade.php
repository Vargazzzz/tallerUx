@extends('layouts.template')
@section('title','Ver bicicleta')
@section('content')
    <a href="/bicicletas" class="btn ease">Volver a bicicletas</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form action="/bicicletas/{{$bicycle->id}}" method="POST" class="flex gap-5">
    
            @csrf
            @method('DELETE')

                <a href="/bicicletas/{{ $bicycle->id }}/edit"
                    class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Editar
                    <img src="{{asset('/images/pencil-light.svg')}}">
                </a>
                <button
                    class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80" type="submit">Eliminar
                    <img src="{{asset('/images/trash-light.svg')}}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <div class="grid grid-rows-[170px_1fr] ">
        <div class="grid grid-cols-2 gap-10 mt-4">
            <div>
                <div class="style-preview items-center">
                    <label>Bicicleta</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>SKU:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{$bicycle->serial}}" disabled>
                </div>
                <div class="style-preview">
                    <label>Modelo:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->model }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Marca:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->brand }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Tipo:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->type }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Color:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->color }}" disabled>
                </div>
                <div class="style-preview">
                    <label class="w-[150px]">Ultima orden:</label>
                    <input type="text" class="outline-none bg-white w-full" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha: </label>
                    <input type="text" class="outline-none bg-white w-full" disabled>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->client->name }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Cedula:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{$bicycle->client->ci}}" disabled>
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->client->phone }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" class="outline-none bg-white w-full" value="{{ $bicycle->client->email }}" disabled>
                </div>
            </div>
        </div>
    </div>

    {{-- <h1>bicicleta {{ $bicycle->model }}</h1>
    <p>{{ $bicycle->serial }}</p>
    <p>{{ $bicycle->type }}</p>
    <p>{{ $bicycle->model }}</p>
    <p>{{ $bicycle->brand }}</p>
    <p>{{ $bicycle->color }}</p>
    <p>{{ $bicycle->client_id }}</p>
    <p>{{ $bicycle->client->name }}</p> --}}

    </form>
@endsection
