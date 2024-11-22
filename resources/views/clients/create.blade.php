@extends('layouts.template')
@section('title', 'Crear cliente')
@section('content')
    <div class="formularios flex flex-col gap-10 justify-center items-center">

        <h1 class="title text-center">Formulario nuevo cliente</h1>
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
        <form action="/clientes" class="form" method="POST">
            @csrf
            <div class="relative">
                <input type="number" class="form-input" name="ci" placeholder="Cedula:">

                @error('ci')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input type="text" name="name" placeholder="Nombre y Apellido:">
                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input type="text" name="phone" placeholder="Telefono:">
                @error('phone')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input type="text" name="email" placeholder="Correo:">

                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div class="relative">
                <input type="text" name="location" placeholder="Locacion:">

                @error('location')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="/clientes" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear cliente</button>
            </div>
        </form>
    </div>
@endsection
