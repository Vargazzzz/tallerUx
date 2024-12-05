@extends('layouts.template')
@section('title', 'Mecanicos')
@section('content')
    <h1 class="title">Mecanicos</h1>
    <div class="flex justify-between">
        <div class="w-1/2 input">
            <form action="/mecanico" method="GET">
                @csrf
                <img src="{{asset('/images/search.svg')}}">
                <input type="text" name="search" placeholder="Buscar" class="outline-none" value="{{request('search')}}">
                <button type="submit">buscar</button>
            </form>
        </div>
        <a href="/mecanico/crear" class="btn">Añadir
            <img src="{{ asset('/images/add.svg') }}">
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
