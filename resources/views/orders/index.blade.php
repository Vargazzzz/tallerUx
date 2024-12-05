@extends('layouts.template')
@section('content')
    <h1 class="title">Ordenes</h1>
    <div class="flex justify-between">
        <div class="w-1/2 input">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M10.5 2a8.5 8.5 0 1 0 5.262 15.176l3.652 3.652a1 1 0 0 0 1.414-1.414l-3.652-3.652A8.5 8.5 0 0 0 10.5 2M4 10.5a6.5 6.5 0 1 1 13 0a6.5 6.5 0 0 1-13 0" />
                </g>
            </svg>
            <input type="text" placeholder="Buscar" class="outline-none">
        </div>
        <a href="/ordenes/crear" class="btn">Añadir
            <img src="{{ asset('/images/add.svg') }}">
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
                    <td>{{ $orden->id }}</td>
                    <td>{{ $orden->client->name }}</td>
                    <td>{{ $orden->bicycle->serial }}</td>
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
