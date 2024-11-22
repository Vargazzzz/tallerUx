<!DOCTYPE html>
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
        @foreach($order->components as $component)
            <li>{{ $component->description }} ({{ $component->pivot->quantity }} x ${{ $component->price }}) - Total: ${{ $component->pivot->total }}</li>
        @endforeach
    </ul>
    <p><strong>Costo Total: ${{ $totalCost }}</strong></p>

    <h2>Agregar Componente</h2>
    <form action="{{ route('orders.addComponent', $order->id) }}" method="POST">
        @csrf
        <div>
            <label for="component_id">Componente:</label>
            <select name="component_id" id="component_id">
                @foreach($components as $component)
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

</body>
</html>