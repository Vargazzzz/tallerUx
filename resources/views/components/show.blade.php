@extends('layouts.template')
@section('content')    
<a href="/componentes" class="btn ease">Volver a componentes</a>
<div class="flex flex-col gap-5">
    <div class="flex justify-between w-full ">
        <div class="flex items-center gap-2.5">
            <h1 class="text-[24px] font-bold">Vista previa</h1>
        </div>
        <form action="/componentes/{{$component->id}}" method="POST" class="flex gap-5">
            <a href="/componentes/{{$component->id}}/edit"
                class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Editar
                <img src="{{ asset('/images/pencil-light.svg') }}">
            </a>
            <button href="/componentes/{{$component->id}}/edit"
                class="bg-black px-4 py-2 rounded-lg text-white flex gap-2.5 w-fit items-center transition-all duration-300 ease-in-out hover:bg-black/80">Eliminar
                <img src="{{ asset('/images/trash-light.svg') }}">
            </button>
        </form>
    </div>
    <div class="w-full h-[0.5px] bg-preview"></div>
    <form class="grid gap-10">
        <div class="flex flex-col">
            <div class="style-preview items-center">
                <label>Repuesto</label>
                <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
            </div>
            <div class="style-preview">
                <label>Serial:</label>
                <input type="text" disabled value="{{$component->serial}}">
            </div>
            <div class="style-preview">
                <label>Descripcion:</label>
                <input type="text" disabled value="{{$component->description}}">
            </div>
            <div class="style-preview">
                <label>Marca:</label>
                <input type="text" disabled value="{{$component->brand}}">
            </div>
            <div class="style-preview">
                <label>Tipo:</label>
                <input type="text" disabled value="{{$component->type}}">
            </div>
            <div class="style-preview">
                <label>Precio:</label>
                <input type="text" disabled value="{{$component->price}}">
            </div>
        </div>
    </form>
</div>
{{-- <h1>componente {{$component->description}}</h1>
<p>{{$component->serial}}</p>
<p>{{$component->description}}</p>
<p>{{$component->brand}}</p>
<p>{{$component->type}}</p>
<p>{{$component->price}}</p>


<form action="/componentes/{{$component->id}}" method="POST">
    
    @csrf
    @method('DELETE')
    
    <button type="submit">
        eliminar componente
    </button>
</form> --}}
@endsection