@extends('layouts.template')
@section('title', 'Clientes')
@section('content')
    <h1 class="title">Clientes</h1>
    <div class="flex justify-between">
        <form action="/clientes" autocomplete="off" method="GET" class="w-1/2 flex">
            <div  class="input">
                @csrf
                <input type="text" name="search" class="outline-none" placeholder="Buscar" value="{{ request('search') }}">
            </div>
            <button type="submit" class="btn-search"><img src="{{ asset('/images/search.svg') }}"></button>
        </form>
        <a href="/clientes/crear" class="btn ease">Añadir
            <img src="{{ asset('/images/add.svg') }}">
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->ci }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->email }}</td>
                    <td class="accions">
                        <a href="/clientes/{{ $client->id }}">
                            <img src="{{ asset('/images/view.svg') }}">
                        </a>
                        <a href="/clientes/{{ $client->id }}/edit">
                            <img src="{{ asset('/images/pencil.svg') }}">
                        </a>
                        {{-- <a href="#">
                            <img src="{{asset('/images/trash.svg')}}">
                        </a> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
