@extends('layouts.template')
@section('title', 'Crear bicicleta')
@section('content')
    <div class="formularios flex flex-col gap-5 justify-center items-center">
        <h1 class="title text-center">Formulario nueva bicicleta</h1>
        <form action="/bicicletas" class="form" method="POST">
            @csrf
            <div>
                <input type="text" name="serial" placeholder="Serial:" value="{{ old('serial') }}">

                @error('serial')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="type" placeholder="Tipo:" value="{{ old('type') }}">

                @error('type')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="model" placeholder="Modelo:" value="{{ old('model') }}">

                @error('model')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="brand" placeholder="Marca:" value="{{ old('brand') }}">

                @error('brand')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="color" placeholder="Color:" value="{{ old('color') }}">

                @error('color')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="number" name="ci" placeholder="Cedula del cliente:" value="{{ old('ci') }}">

                @error('ci')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="/bicicletas" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear bicicleta</button>
            </div>
        </form>

    </div>
@endsection
