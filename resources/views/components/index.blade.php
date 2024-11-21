@extends('layouts.template')
@section('content')
    <h1 class="ttitle">Componentes</h1>
    <div class="flex justify-between">
        <div class="w-1/2 input">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <g fill="none" fill-rule="evenodd">
                    <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M10.5 2a8.5 8.5 0 1 0 5.262 15.176l3.652 3.652a1 1 0 0 0 1.414-1.414l-3.652-3.652A8.5 8.5 0 0 0 10.5 2M4 10.5a6.5 6.5 0 1 1 13 0a6.5 6.5 0 0 1-13 0" />
                </g>
            </svg>
            <input type="text" placeholder="Buscar" class="outline-none">
        </div>
        <a href="/componentes/crear" class="btn ease">Añadir
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M11 11V4h2v7h7v2h-7v7h-2v-7H4v-2z" />
            </svg>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No ID</th>
                <th>Descripcion</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($components as $component)
                <td>{{ $component->serial }}</td>
                <td>{{ $component->description }}</td>
                <td>{{ $component->brand }}</td>
                <td>{{ $component->type }}</td>
                <td>{{ $component->price }}</td>
                <td>
                    <div class="flex justify-center gap-5">
                        <a href="/componentes/{{$component->id}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor"><circle cx="12" cy="12" r="3.5"/><path d="M20.188 10.934c.388.472.582.707.582 1.066s-.194.594-.582 1.066C18.768 14.79 15.636 18 12 18s-6.768-3.21-8.188-4.934c-.388-.472-.582-.707-.582-1.066s.194-.594.582-1.066C5.232 9.21 8.364 6 12 6s6.768 3.21 8.188 4.934Z"/></g></svg></a>
                        <a href="/componentes/{{ $component->id }}/edit"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m19.71 8.04l-2.34 2.33l-3.75-3.75l2.34-2.33c.39-.39 1.04-.39 1.41 0l2.34 2.34c.39.37.39 1.02 0 1.41M3 17.25L13.06 7.18l3.75 3.75L6.75 21H3zM16.62 5.04l-1.54 1.54l2.34 2.34l1.54-1.54zM15.36 11L13 8.64l-9 9.02V20h2.34z" />
                            </svg></a>
                        {{-- Eliminar no se si se pondra --}}
                        {{-- <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m20 9l-1.995 11.346A2 2 0 0 1 16.035 22h-8.07a2 2 0 0 1-1.97-1.654L4 9m17-3h-5.625M3 6h5.625m0 0V4a2 2 0 0 1 2-2h2.75a2 2 0 0 1 2 2v2m-6.75 0h6.75"/></svg></a> --}}
                    </div>
                </td>
            @endforeach
        </tbody>
    </table>
    <ul>
        @foreach ($components as $component)
            <li>
                <a href="/componentes/{{ $component->id }}">
                    {{ $component->description }}
                </a>
            </li>
        @endforeach
    </ul>

    {{ $components->links() }}
@endsection
