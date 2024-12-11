@extends('layouts.template')
@section('title', 'Crear mecanico')
@section('content')
    <div class="formularios flex flex-col gap-10 justify-center items-center">
        <h1 class="title text-center">Formulario nuevo mecanico</h1>
        <form action="/mecanico" autocomplete="off" class="form w-[450px]" method="POST">
            @csrf
            <div>
                <input type="number" name="ci" placeholder="Cedula:" value="{{ old('ci') }}">

                @error('ci')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="name" placeholder="Nombre y Apellido:" value="{{ old('name') }}">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="phone" placeholder="Telefono:" value="{{ old('phone') }}">

                @error('phone')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>

                <input type="text" name="email" placeholder="Correo:" value="{{ old('email') }}">

                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="/mecanico" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear mecanico</button>
            </div>
        </form>
    </div>
@endsection


{{-- @if ($errors->any())
        <div>
            <h2>errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}
