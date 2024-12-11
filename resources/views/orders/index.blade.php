@extends('layouts.template')
@section('content')
    <h1 class="title">Ordenes</h1>
    <div class="flex justify-between">
        <div class="w-1/2 flex">
            <form action="/ordenes" method="GET" class="input">
                @csrf
                <input type="text" name="search" class="outline-none" placeholder="Buscar" value="{{request('search')}}">
                <button type="submit" class="btn-search"><img src="{{asset('/images/search.svg')}}"></button>
            </form>
            
        </div>
        <a href="/ordenes/crear" class="btn ease">Añadir
            <img src="{{asset('/images/add.svg')}}">
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th># Orden</th>
                <th>Cliente</th>
                <th>Bicicleta</th>
                <th>Mecanico</th>
                <th>Status</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $orden)
                <tr>
                    <td>{{ $orden->n_order }}</td>
                    <td>{{ $orden->client->name }}</td>
                    <td>{{ $orden->bicycle->model }}</td>
                    <td>{{ $orden->mechanic->name }}</td>
                    <td>{{ $orden->status }}</td>
                    <td class="accions">
                        <a href="/ordenes/{{ $orden->id }}">
                            <img src="{{ asset('/images/view.svg') }}">
                        </a>
                        {{-- <a href="/ordenes/{{ $orden->id }}/edit">
                            <img src="{{ asset('/images/pencil.svg') }}">
                        </a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
