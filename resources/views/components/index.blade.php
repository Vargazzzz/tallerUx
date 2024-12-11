@extends('layouts.template')
@section('title','Repuestos')
@section('content')
    <h1 class="title">Componentes</h1>
    <div class="flex justify-between">
        <div class="w-1/2 flex">
            <form action="/componentes" method="GET" class="input">
                @csrf
                <input type="text" name="search" class="outline-none" placeholder="Buscar" value="{{request('search')}}">
                <button type="submit" class="btn-search"><img src="{{asset('/images/search.svg')}}"></button>
            </form>
            
        </div>
        <a href="/componentes/crear" class="btn ease">Añadir
            <img src="{{asset('/images/add.svg')}}">
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($components as $component)
            <tr>
                <td>{{ $component->serial }}</td>
                <td>{{ $component->description }}</td>
                <td>{{ $component->brand }}</td>
                <td>{{ $component->type }}</td>
                <td>{{ $component->price }}</td>
                <td>
                    <div class="accions">
                        <a href="/componentes/{{ $component->id }}"> <img src="{{ asset('/images/view.svg') }}"></a>
                        <a href="/componentes/{{ $component->id }}/edit">
                            <img src="{{ asset('/images/pencil.svg') }}">
                        </a>
                        {{-- Eliminar no se si se pondra --}}
                        {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m20 9l-1.995 11.346A2 2 0 0 1 16.035 22h-8.07a2 2 0 0 1-1.97-1.654L4 9m17-3h-5.625M3 6h5.625m0 0V4a2 2 0 0 1 2-2h2.75a2 2 0 0 1 2 2v2m-6.75 0h6.75"/></svg></a> --}}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
