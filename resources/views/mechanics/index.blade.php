@extends('layouts.template')
@section('title', 'Mecanicos')
@section('content')
    <h1 class="title">Mecanicos</h1>
    <div class="flex justify-between">
        <form class="w-1/2 flex" action="/mecanico" method="GET">
            <div  class="input">
                @csrf
                <input type="text" name="search" class="outline-none" placeholder="Buscar" value="{{request('search')}}">
                </div>
            <button type="submit" class="btn-search"><img src="{{asset('/images/search.svg')}}"></button>
        </form>
        <a href="/mecanico/crear" class="btn ease">Añadir
            <img src="{{asset('/images/add.svg')}}">
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mechanics as $mechanic)
                <tr>
                    <td>{{ $mechanic->ci }}</td>
                    <td>{{ $mechanic->name }}</td>
                    <td>{{ $mechanic->phone }}</td>
                    <td>{{ $mechanic->email }}</td>
                    <td class="accions">
                        <a href="/mecanico/{{ $mechanic->id }}">
                            <img src="{{ asset('/images/view.svg') }}">
                        </a>
                        <a href="/mecanico/{{ $mechanic->id }}/edit">
                            <img src="{{ asset('/images/pencil.svg') }}">
                        </a>
                </tr>
            @endforeach
    </table>
    {{-- Nuevo mecanico</a>

    <ul>
        @foreach ($mechanics as $mechanic)
            <li>
                <a href="/mecanico/{{ $mechanic->id }}">
                    {{ $mechanic->name }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $mechanics->links() }} --}}

@endsection
