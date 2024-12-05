{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Orden #{{ $order->n_order }}</h1>
    <p>Cliente: {{ $order->client->name }}</p>
    <p>Bicicleta: {{ $order->bicycle->model }}</p>
    <p>Mecánico: {{ $order->mechanic->name }}</p>
    <p>Estado: {{ $order->status }}</p>

    <h2>Componentes</h2>
    <ul>
        @foreach ($order->components as $component)
            <li>{{ $component->description }} ({{ $component->pivot->quantity }} x ${{ $component->price }}) - Total: ${{ $component->pivot->total }}</li>
            <form action ="{{route ('orders.removeComponent', ['order'=> $order->id, 'component'=>$component->id])}}" method= "POST">
                @csrf
                @method('DELETE')
                <button type="submit">eliminar</button>
            </form>
        @endforeach
    </ul>
    <p><strong>Costo Total: ${{ $totalCost }}</strong></p>

    <h2>Agregar Componente</h2>
    <form action="{{ route('orders.addComponent', $order->id) }}" method="POST">
        @csrf
        <div>
            <label for="component_id">Componente:</label>
            <select name="component_id" id="component_id">
                @foreach ($components as $component)
                    <option value="{{ $component->id }}">{{ $component->description }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="quantity">Cantidad:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
        </div>
        <button type="submit">Agregar</button>
    </form>

    <form action="/ordenes/{{$order->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar orden
        </button>
    </form>
</body>
</html> --}}
@extends('layouts.template')
@section('title', 'Ver orden')
@section('content')
    <a href="/orden" class="btn">Volver a ordenes</a>
    <div class="flex flex-col gap-5">
        <div class="flex justify-between w-full ">
            <div>
                <h1 class="text-[24px] font-bold">Vista previa</h1>
            </div>
            <form class="flex gap-5" action="/ordenes/{{ $order->id }}" method="POST">
                {{-- <a href="/ordenes/{{ $order->id }}/edit" class="btn">Editar
                    <img src="{{ asset('/images/pencil-light.svg') }}"></a> --}}
                <button type="submit" class="btn">
                    Eliminar
                    <img src="{{ asset('/images/trash-light.svg') }}">
                </button>
            </form>
        </div>
        <div class="w-full h-[0.5px] bg-preview"></div>
        <div class="flex flex-col gap-5">
            <div>
                <h2 class="title">Datos de la orden</h2>
                <div>
                    <div class="style-preview">
                        <label for="name">Numero de orden:</label>
                        <input type="text" id="name" name="name" disabled value="{{ $order->n_order }}">
                    </div>
                    <div class="style-preview">
                        <label for="ci">Nombre del cliente:</label>
                        <input type="text" id="ci" name="ci" disabled value="{{ $order->client->name }} ">
                    </div>
                    <div class="style-preview">
                        <label for="phone">Orden de la bicicleta:</label>
                        <input type="text" id="phone" name="phone" disabled value="{{ $order->bicycle->model }}">
                    </div>
                    <div class="style-preview">
                        <label for="email">Mecanico:</label>
                        <input type="email" id="email" name="email" disabled value="{{ $order->mechanic->name }}">
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="title">Agregar Componente</h2>
                <form action="{{ route('orders.addComponent', $order->id) }}" method="POST" class="flex gap-5">
                    @csrf
                    <div class="style-preview " >
                        <label for="component_id">Componente:</label>
                        <select name="component_id" id="component_id">
                            @foreach ($components as $component)
                                <option value="{{ $component->id }}">{{ $component->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="style-preview">
                        <label for="quantity">Cantidad:</label>
                        <input type="number" name="quantity" id="quantity" min="1" required placeholder="Ingrese cantidad" class="">
                    </div>
                    <button type="submit" class="btn">Agregar</button>
                </form>
            </div>
            <div class="flex flex-col gap-5">
                <h2 class="title">Componentes</h2>
                <ul class="flex flex-col gap-2">
                    @foreach ($order->components as $component)
                        <li class="list-disc">{{ $component->description }} ({{ $component->pivot->quantity }} x ${{ $component->price }})
                            - Total: ${{ $component->pivot->total }}</li>
                    @endforeach
                </ul>
                <p><strong>Costo Total: ${{ $totalCost }}</strong></p>
            </div>
        </div>
    </div>
@endsection
