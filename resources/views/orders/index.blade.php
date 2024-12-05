@extends('layouts.template')
@section('content')
<h1 class="title">Ordenes</h1>
    <div class="flex justify-between">
        <div class="w-1/2 input">
            <form action="/ordenes" method="GET">
                @csrf
                <img src="{{asset('/images/search.svg')}}">
                <input type="text" name="search" placeholder="Buscar" class="outline-none" value="{{request('search')}}">
                <button type="submit">buscar</button>
            </form>
        </div>
        <a href="/ordenes/crear" class="btn">Añadir
            <img src="{{asset('/images/add.svg')}}">
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
            <tr>
                <td>1741D</td>
                <td>
                    <div class="flex items-center gap-5 "> José Vargas
                    </div>
                </td>
                <td>12569756</td>
                <td>180$</td>
                <td>
                    {{-- aca debes hacer una logica ya que dependiendo el estado es el color que debe aparecer esta es la base, debes hacer comparaciones de acuerdo los valores que hagas en la base de datos. Supongamos cada estado debes compararlo, de acuerdo al que sea es los estilos que tendra exiten 3 estados el que arroje verdadero es el color del cual va a mostrar --}}
                    <span class="inline-flex items-center px-2 py-1 rounded text-sm font-medium bg-green-800 text-white">Por
                        revisar</span>
                </td>
                <td>
                    <div class="flex justify-evenly">
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m19.71 8.04l-2.34 2.33l-3.75-3.75l2.34-2.33c.39-.39 1.04-.39 1.41 0l2.34 2.34c.39.37.39 1.02 0 1.41M3 17.25L13.06 7.18l3.75 3.75L6.75 21H3zM16.62 5.04l-1.54 1.54l2.34 2.34l1.54-1.54zM15.36 11L13 8.64l-9 9.02V20h2.34z" />
                            </svg></a>
                        {{-- Eliminar no se si se pondra --}}
                        {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m20 9l-1.995 11.346A2 2 0 0 1 16.035 22h-8.07a2 2 0 0 1-1.97-1.654L4 9m17-3h-5.625M3 6h5.625m0 0V4a2 2 0 0 1 2-2h2.75a2 2 0 0 1 2 2v2m-6.75 0h6.75"/></svg></a> --}}
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
