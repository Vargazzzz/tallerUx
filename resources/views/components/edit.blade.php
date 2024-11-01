<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>formulario editar component</h1>

    <form action="/componentes/{{$component->id}}" method="POST">

        @csrf

        @method('PUT')

        <label >serial</label>
        <input type="text" name="serial" value="{{old('serial',$component->serial)}}">

        @error('serial')
            <p>{{$message}}</p>
        @enderror

        <label >descripcion</label>
        <input type="text" name="description" value="{{old('description', $component->description)}}">

        @error('description')
            <p>{{$message}}</p>
        @enderror

        <label >marca</label>
        <input type="text" name="brand" value="{{old('brand', $component->brand)}}">

        @error('brand')
            <p>{{$message}}</p>
        @enderror

        <label >tipo</label>
        <input type="text" name="type" value="{{old('type', $component->type)}}">

        @error('type')
            <p>{{$message}}</p>
        @enderror
        
        <label >precio</label >
        <input type="number" step="0.01" name="price" value="{{old('price',$component->price)}}">
        
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <button type="submit">modificar</button>


</body>
</html>