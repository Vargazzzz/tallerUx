@extends('layouts.template')
@section('title', 'Crear repuesto')
@section('content')
    <div class="formularios flex flex-col gap-10 justify-center items-center">
        <h1 class="title text-center">Formulario nuevo componente</h1>
        <form action="/componentes" class="form w-[450px]" method="POST">
            @csrf
            <div>
                <input type="text" name="serial" placeholder="Serial:">
                @error('serial')
                    <p>{{$message}}</p>
                @enderror
        
            </div>
            <div>
                <input type="text" name="description" placeholder="Descripcion:">
    
                @error('description')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="brand" placeholder="Marca:">
    
                @error('brand')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="type" placeholder="Tipo:">
    
                @error('type')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <input type="number" step="0.01" name="price" placeholder="Precio:">
        
                @error('price')
                    <p>{{$message}}</p>
                @enderror
            </div>
            <div>
                <a href="/componentes" class="btn w-full">Volver</a>
                <button type="submit" class="btn w-full">Crear componente</button>
            </div>
        </form>    
    </div>
@endsection

    {{--@if ($errors->any())
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
    @endif--}}

  