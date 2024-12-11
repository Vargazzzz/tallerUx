@extends('layouts.template')
@section('title', 'Bicicletas')
@section('content')
    <h1 class="title">Bicicletas</h1>
    <div class="flex justify-between">
        <form action="/bicicletas" autocomplete="off" method="GET" class="w-1/2 flex">
            <div class="input">
                @csrf
                <input type="text" name="search" class="outline-none" placeholder="Buscar" value="{{request('search')}}">
            </div>           
            <button type="submit" class="btn-search"><img src="{{asset('/images/search.svg')}}"></button>
        </form>
        <a href="/bicicletas/crear" class="btn ease">Añadir
            <img src="{{asset('/images/add.svg')}}">
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Serial</th>
                <th>Tipo</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Color</th>
                <th>Propietario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bicycles as $bicycle)
                <tr>
                    <td>{{ $bicycle->serial }}</td>
                    <td>{{ $bicycle->type }}</td>
                    <td>{{ $bicycle->model }}</td>
                    <td>{{ $bicycle->brand }}</td>
                    <td>{{ $bicycle->color }}</td>
                    <td>{{ $bicycle->client->name}}</td>
                    <td class="accions">
                        <a href="/bicicletas/{{ $bicycle->id }}">
                            <img src="{{ asset('/images/view.svg') }}">
                        </a>
                        <a href="/bicicletas/{{ $bicycle->id }}/edit">
                            <img src="{{ asset('/images/pencil.svg') }}">
                        </a>
                        {{-- <a href="#">
                            <img src="{{asset('/images/trash.svg')}}">
                        </a>  --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
