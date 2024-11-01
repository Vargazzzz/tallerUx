<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>formulario editar cliente</h1>

    <form action="/clientes/{{$client->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >cedula</label>
        <input type="number" name="ci" value="{{old('ci',$client->ci)}}">

        @error('ci')
            <p>{{$message}}</p>
        @enderror

        <label >nombre y apellido</label>
        <input type="text" name="name" value="{{old('name', $client->name)}}">

        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label >telefono</label>
        <input type="text" name="phone" value="{{old('phone', $client->phone)}}">

        @error('phone')
            <p>{{$message}}</p>
        @enderror

        <label >correo</label>
        <input type="text" name="email" value="{{old('email', $client->email)}}">

        @error('email')
            <p>{{$message}}</p>
        @enderror

        <label >locacion</label>
        <input type="text" name="location" value="{{old('location',$client->location)}}">

        @error('location')
            <p>{{$message}}</p>
        @enderror
    
        <button type="submit">modificar</button>


</body>
</html>