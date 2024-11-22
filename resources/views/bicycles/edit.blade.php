@extends('layouts.template')
@section('title','Editar bicicleta')
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
                    <input type="text" class="outline-none" value="{{ $bicycle->model }}">
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
                <button type="button" class="btn self-end">
                    Guardar 
                    <img src="{{asset('/images/save.svg')}}">
                </button>
            </div>
        </form>
    </div>
@endsection

