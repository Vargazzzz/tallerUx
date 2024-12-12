<!DOCTYPE html>
<html>
<head>
    <title>Orden #{{ $order->n_order }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Orden #{{ $order->n_order }}</h1>
        <p><strong>Cliente:</strong> {{ $order->client->name }}</p>
        <p><strong>Mecánico:</strong> {{ $order->mechanic->name }}</p>
        <p><strong>Bicicleta:</strong> {{ $order->bicycle->model }}</p>
        <p><strong>Estado:</strong> {{ $order->status }}</p>
        <h2>Componentes</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->components as $component)
                <tr>
                    <td>{{ $component->description }}</td>
                    <td>{{ $component->pivot->quantity }}</td>
                    <td>{{ $component->price }}</td>
                    <td>{{ $component->pivot->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h3>Total: {{ $totalCost }}</h3>
    </div>
</body>
</html>