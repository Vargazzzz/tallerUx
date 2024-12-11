

@extends('layouts.template')
@section('title', 'Crear orden')
@section('content')
    <div class="formularios flex flex-col gap-10 justify-center items-center">
        <h1 class="title text-center">Formulario nueva orden</h1>
        <form action="/ordenes" autocomplete="off" class="form w-[450px]" method="POST">
            @csrf
            <div>
                <input type="number" name="n_order" value="{{ old('n_order') }}" placeholder="# Orden">
                @error('n_order')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="number" name="ci_client" value="{{ old('ci_client') }}" placeholder="ci cliente">

                @error('ci_client')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="number" name="ci_mechanic" value="{{ old('ci_mechanic') }}" placeholder="ci mecanico">

                @error('ci_mechanic')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="serial" value="{{ old('serial') }}" placeholder="Serial bicicleta">

                @error('serial')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="status" value="{{ old('status') }}" placeholder="Estado">
                @error('status')
                    <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <a href="/ordenes" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear orden</button>
            </div>
        </form>
    </div>
@endsection
