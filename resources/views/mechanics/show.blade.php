@extends('layouts.template')
@section('title', 'Ver')
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
        <div>
            <div class="style-preview">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" disabled value="{{ $mechanic->name }}">
            </div>
            <div class="style-preview">
                <label for="ci">Cedula:</label>
                <input type="text" id="ci" name="ci" disabled value="{{ $mechanic->ci }}">
            </div>
            <div class="style-preview">
                <label for="phone">Teléfono:</label>
                <input type="text" id="phone" name="phone" disabled value="{{ $mechanic->phone }}">
            </div>
            <div class="style-preview">
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" disabled value="{{ $mechanic->email }}">
            </div>
        </div>
    </div>
    {{-- <h1>mecanico {{ $mechanic->name }}</h1>
    <p>{{ $mechanic->ci }}</p>
    <p>{{ $mechanic->phone }}</p>
    <p>{{ $mechanic->email }}</p>

     @foreach ($client->bicycles as $bicycle)
    <p>{{$bicycle->serial}}</p>
    @endforeach 

    <a href="/mecanico/{{ $mechanic->id }}/edit">editar mecanico</a>

    <form action="/mecanico/{{ $mechanic->id }}" method="POST">

        @csrf
        @method('DELETE')

        <button type="submit">
            eliminar mecanico
        </button>
    </form> --}}
@endsection
