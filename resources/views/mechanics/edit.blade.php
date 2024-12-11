@extends('layouts.template')
@section('title', 'Editar mecanico')
@section('content')
    <a href="/mecanico" class="btn">Volver a mecanico</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div>
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form class="flex gap-5" action="/mecanico/{{ $mechanic->id }}" method="POST">
                <a href="/mecanico/{{ $mechanic->id }}/edit" class="btn">Editar
                    <img src="{{ asset('/images/pencil-light.svg') }}"></a>
                <button type="submit" class="btn">
                    Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
        <form  action="/mecanico/{{$mechanic->id}}" method="POST" class="flex flex-col">
            @csrf

            @method('PUT')

            <div class="style-preview items-center">
                <label>Mecanico</label>
                <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
            </div>
            <div class="style-preview">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{old('name',$mechanic->name)}}">
            </div>
            <div class="style-preview">
                <label for="ci">Cedula:</label>
                <input type="number" id="ci" name="ci" value="{{old('ci',$mechanic->ci)}}">
            </div>
            <div class="style-preview">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone" value="{{old('phone',$mechanic->phone)}}">
            </div>
            <div class="style-preview">
                <label for="email">Correo electrónico:</label>
                <input type="text" id="email" name="email" value="{{old('email',$mechanic->email)}}">
            </div>
            <button type="submit" class="btn mt-5 self-end">
                Guardar
                <img src="{{ asset('/images/save.svg') }}">
            </button>
        </form>
    </div>
@endsection
