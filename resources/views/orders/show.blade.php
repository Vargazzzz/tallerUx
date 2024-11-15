<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <a href="/ordenes">volver a ordenes</a>

    <h1>orden {{$order->n_order}}</h1>

    <a href="/ordenes/{{$order->id}}/edit">editar componente</a>


    <form method="POST" action= "/ordenes/{{$order->id}}">
        {{--@csrf
        @method('PUT')
        <div>
            <label for="components">Componentes:</label>
            <select name="components[]" multiple>
                @foreach($components as $component)
                    <option value="{{$component->id}}">{{$component->serial}}{{$component->description}}</option>
                @endforeach            
            </select>
        </div>
        <button type="submit">guardar componentes</button>--}}
    </form>
    
    <div>
        <input type="text" id="idQuantity" placeholder="cantidad">
    </div>

    <div>
        <input type="text" id="idComponent" placeholder="ingrese un componente">
        <button onclick="searchProduct();">agregar</button>
    </div>


    <form action="/ordenes/{{$order->id}}" method="POST">
        
        @csrf
        @method('DELETE')
        
        <button type="submit">
            eliminar orden
        </button>
    </form>
    <script>

        var subtotalGeneral = 0;
        var total = 0;
        function searchProduct(){
            var idComponent = document.getElementById("idComponent").value;
            var quantity = document.getElementById("idQuantity").value;
            
            $.ajax({
                url:'',
                method:'post',
                data:{
                    idComponent : idComponent
                }
                succes: function (data){
                    if(data.error){
                        alert(dat.error)
                    }
                    else{
                        var component = document.getElementById("component");
                        var fila = document.createElement("tr");
                        let subtotal = data.price * quantity;
                        subtotalGeneral += subtotal;
                        total= subtotalGeneral;
                        fila.innerHTML = "<td>" + data.id + "</td><td>" + data.description + "</td><td>" + data.price + "</td><td>" + quantity + "</td><td>" + subtotal + "</td>";
                        component.appenChild(fila);
                    }
                }

            })
        }

    </script>
</body>
</html>