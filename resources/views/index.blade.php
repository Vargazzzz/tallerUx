<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('/css/logos/logo-negro.png')}}">

</head>

<body>
    <div class="container-HL bg-index font-[Nunito]">
        <div class="container-HL bg-w flex items-center">
          <div class=" grid gap-5 w-[50%] items-center justify-center">
            <div class="w-[500px]">
              <h1 class="font-extrabold text-[64px]">Bienvenido al
                Inventario
                Ultrabike</h1>
              <p class="text-lg">Behold the <a href="#" class="text-link">TechFit</a> Pro Smartwatch, the ultimate companion for modern living. </p>
            </div>
            <a  href="/login" class="btn ease">Iniciar sesión
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                  </svg>
            </a>
          </div>
        </div>
      </div>
</body>

</html>
