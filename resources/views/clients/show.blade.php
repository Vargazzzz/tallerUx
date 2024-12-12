@extends('layouts.template')
@section('title', 'Ver cliente')
@section('content')
    <a href="/clientes" class="btn ease">Volver a Clientes</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div class="flex items-center gap-2.5">
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form class="flex gap-5">
                <a href="/clientes/{{ $client->id }}/edit" class="btn">Editar
                    <img src="{{ asset('/images/pencil-light.svg') }}">
                </a>
                <button class="btn">Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
    </div>
    <form class="grid grid-cols-2 gap-10">
        <!-- col 1 -->
        <div class="flex flex-col justify-between">
            <div class="flex flex-col">
                <div class="style-preview items-center">
                    <label>Cliente</label>
                    <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
                </div>
                <div class="style-preview">
                    <label>Nombre:</label>
                    <input type="text" class="outline-none" value="{{ $client->name }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Cedula:</label>
                    <input type="text" class="outline-none" value="{{ $client->ci }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Teléfono:</label>
                    <input type="text" class="outline-none" value="{{ $client->phone }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Correo:</label>
                    <input type="text" class="outline-none" value="{{ $client->email }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Direccion:</label>
                    <input type="text" class="outline-none" value="{{ $client->location }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha de creacion:</label>
                    <input type="text" class="outline-none" value="{{ $client->created_at }}" disabled>
                </div>
            </div>
        </div>
        <!-- col 2 -->
        <div>
            <div>
                <div class="style-preview">
                    <label>Bicicleta</label>
                    <select name="bicycle_id" class="outline-none select-component" onchange="this.form.submit()">
                        <option class="text-black" value="">Seleccione una bicicleta</option>
                        @foreach ($client->bicycles as $bicycle)
                            <option class="text-black" value="{{ $bicycle->id }}"
                                {{ request('bicycle_id') == $bicycle->id ? 'selected' : '' }}>
                                {{ $bicycle->serial }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if ($selectedBicycle)
                <div class="style-preview">
                    <label>SKU:</label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->serial }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Modelo:</label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->model }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Marca:</label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->brand }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Tipo:</label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->type }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Color:</label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->color }}" disabled>
                </div>
                <div class="style-preview">
                    <label>Ultima orden: </label>
                    <input type="text" class="outline-none" disabled>
                </div>
                <div class="style-preview">
                    <label>Fecha: </label>
                    <input type="text" class="outline-none" value="{{ $selectedBicycle->created_at }}" disabled>
                </div>
            @endif
        </div>
    </form>
    <div class="flex flex-col">
        <div class="style-preview items-center">
            <p>Listado de Ordenes</p>
            <Icon name="ep:arrow-down" class="w-4 h-4" style="color: black" />
        </div>
        <div class="flex border-b gap-2.5 border-black py-3 mb-4">
            <ul>
                @foreach ($client->orders as $order)
                    <li>
                        <a href="{{ route('orders.show', $order->id) }}"> Orden #{{ $order->n_order }} Fecha:
                            {{ $order->created_at }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- <span class="h-[1px] bg-black"></span> --}}
@endsection
