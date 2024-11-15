@extends('layouts.template')
@section('content')
    <a href="/bicicletas" class="btn ease">Volver a bicicletas</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <div class="flex gap-5">
                <a href="/bicicletas/{{ $bicycle->id }}/edit"
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
    <div class="grid grid-rows-[170px_1fr] ">
        <div class="shadow-[0px_4px_4px_rgba(0,0,0,0.3)] w-[170px] h-[170px] rounded-2xl flex justify-center items-center">
        </div>
        <div class="grid grid-cols-2 gap-10 mt-4">
            <div>
                <div class="style-preview items-center">
                    <label>Bicicleta</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>SKU:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Modelo:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Marca:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Tipo:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Color:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Ultima orden: </label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha: </label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" class="outline-none bg-white" disabled>
                </div>
            </div>
        </div>
    </div>

    <h1>bicicleta {{ $bicycle->model }}</h1>
    <p>{{ $bicycle->serial }}</p>
    <p>{{ $bicycle->type }}</p>
    <p>{{ $bicycle->model }}</p>
    <p>{{ $bicycle->brand }}</p>
    <p>{{ $bicycle->color }}</p>
    <p>{{ $bicycle->client_id }}</p>
    <p>{{ $bicycle->client->name }}</p>


    <a href="/bicicletas/{{ $bicycle->id }}/edit">editar bicicleta</a>

    <form action="/bicicletas/{{ $bicycle->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            eliminar bicicleta
        </button>
    </form>
@endsection
