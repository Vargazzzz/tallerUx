<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>formulario editar bicicleta</h1>

    <form action="/bicicletas/{{$bicycle->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >serial</label>
        <input type="text" name="serial" value="{{old('serial',$bicycle->serial)}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >tipo</label>
        <input type="text" name="type" value="{{old('type', $bicycle->type)}}">

        @error('type')
            <p>{{$message}}</p>
        @enderror

        <label >modelo</label>
        <input type="text" name="model" value="{{old('model', $bicycle->model)}}">

        @error('model')
            <p>{{$message}}</p>
        @enderror

        <label >marca</label>
        <input type="text" name="brand" value="{{old('brand', $bicycle->brand)}}">

        @error('brand')
            <p>{{$message}}</p>
        @enderror

        <label >color</label>
        <input type="text" name="color" value="{{old('color',$bicycle->color)}}">

        @error('color')
            <p>{{$message}}</p>
        @enderror
    
        <label >id cliente</label>
        <input type="number" name="client_id" value="{{old('client_id',$bicycle->client_id)}}">

        @error('client_id')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">modificar</button>


</body>
</html>