<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('/css/logos/logo-negro.png')}}">
</head>

<body>
    <main class="w-full h-full font-[Lato]">
        <div class="grid grid-cols-[220px_1fr] grid-rows-[1fr_auto] min-h-dvh">
            <header class="bg-black w-[220px] h-full flex flex-col">
                <img src="{{ asset('/css/logos/logo-negro.png') }}">
                <!-- navbar -->
                <nav class="w-[90%]">
                    <ul class="navigation-menu">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="m35.745 12.17l-4.925 1.48l3.28 8.578a8 8 0 1 1-1.868.715l-1.648-4.31l-5.682 11.802A1 1 0 0 1 24 31h-4.062A8.001 8.001 0 0 1 4 30a8 8 0 0 1 15.938-1h2.5l-4.88-13.664A1 1 0 0 1 17.5 15H16a1 1 0 1 1 0-2h4.5a1 1 0 1 1 0 2h-.938l1.842 5.157l8.127-4.277l-.965-2.523a1 1 0 0 1 .647-1.315l5.957-1.787zm-13.662 9.89l1.972 5.52l4.23-8.784zm12.983 8.297l-2.113-5.527a6 6 0 1 0 1.868-.715l2.113 5.528a1 1 0 0 1-1.868.714M17.917 29H12a1 1 0 1 0 0 2h5.917A6.002 6.002 0 0 1 6 30a6 6 0 0 1 11.917-1"
                                    clip-rule="evenodd" />
                            </svg>
                            <a href="/bicicletas">Bicicletas</a>
                            <img src="{{asset('images/circle.svg')}}">
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 2a5 5 0 1 0 5 5a5 5 0 0 0-5-5m0 8a3 3 0 1 1 3-3a3 3 0 0 1-3 3m9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z" />
                            </svg>
                            <a href="/clientes">Clientes</a>
                            <img src="{{asset('images/circle.svg')}}">
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16">
                                <path fill="none" stroke="currentColor" stroke-linejoin="round"
                                    d="M5.5 2.5h-2v12h9v-12h-2m-5 6l2 2L11 7M5.5 1.5h5l-.625 2h-3.75z" />
                            </svg>
                            <a href="/ordenes">Ordenes</a>
                            <img src="{{asset('images/circle.svg')}}">
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8h16v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm4-4h8l4 4H4zm0 8h4"/></svg>
                            <a href="/componentes">Repuestos</a>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path fill="black"
                                    d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                            </svg>
                        </li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2">
                                    <circle cx="18" cy="15" r="3" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path
                                        d="M10 15H6a4 4 0 0 0-4 4v2m19.7-4.6l-.9-.3m-5.6-2.2l-.9-.3m2.3 5.1l.3-.9m2.2-5.6l.3-.9m.2 7.4l-.4-1m-2.4-5.4l-.4-1m-2.1 5.3l1-.4m5.4-2.4l1-.4" />
                                </g>
                            </svg><a href="/kuftyf">Usuario</a><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path fill="black"
                                    d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                            </svg></li>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                                <g fill="none">
                                    <path
                                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                    <path fill="currentColor"
                                        d="M12 3a1 1 0 0 1 .117 1.993L12 5H7a1 1 0 0 0-.993.883L6 6v12a1 1 0 0 0 .883.993L7 19h4.5a1 1 0 0 1 .117 1.993L11.5 21H7a3 3 0 0 1-2.995-2.824L4 18V6a3 3 0 0 1 2.824-2.995L7 3zm5.707 5.464l2.828 2.829a1 1 0 0 1 0 1.414l-2.828 2.829a1 1 0 1 1-1.414-1.415L17.414 13H12a1 1 0 1 1 0-2h5.414l-1.121-1.121a1 1 0 0 1 1.414-1.415" />
                                </g>
                            </svg><a href="/login">Salir</a><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path fill="black"
                                    d="M12 22q-2.075 0-3.9-.788t-3.175-2.137T2.788 15.9T2 12t.788-3.9t2.137-3.175T8.1 2.788T12 2t3.9.788t3.175 2.137T21.213 8.1T22 12t-.788 3.9t-2.137 3.175t-3.175 2.138T12 22" />
                            </svg></li>
                    </ul>
                </nav>
            </header>
            <div class="content">
                <!-- main content -->
                @yield('content')
            </div>
        </div>
        <!-- footer -->
        <footer class="h-[70px] bg-black text-white flex items-center pl-5">
            © 2024 Ultrabikex
        </footer>
    </main>

</body>

</html>
<!-- para laravel -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.navigation-menu li a');

        links.forEach(link => {
            if (window.location.href.includes(link.pathname)) {
                link.classList.add('active');
                link.closest('li').classList.add('active');
            }
        });
    });
</script>
