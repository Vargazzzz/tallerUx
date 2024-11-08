@extends('layouts.template')
@section('content')
    <h1>mostrar clientes</h1>

    <a href="/clientes/crear">Nuevo cliente</a>

    <ul>
        @foreach ($clients as $client)
            <li>
                <a href="/clientes/{{$client->id}}">
                    {{$client->name}}
                </a>
            </li>
        @endforeach
    </ul>

    {{$clients->links()}}
@endsection