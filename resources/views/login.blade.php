<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container-HL bg-login_register font-[Lato]">
        <div class="container-HL bg-w flex justify-center items-center">
            <div class="flex flex-col gap-5 w-[450px] h-[550px] bg-white rounded-md items-center justify-center p-10">
                <div class="flex justify-center items-center h-[50px]">
                    <p class="text-black">Bienvenido a </p>
                    <img src="{{asset('/css/logos/logo-blanco.png')}}">
                </div>
                <h1 class="font-bold font-Lato text-[28px]">INICIA SESIÓN</h1>
                <form class="w-full flex flex-col gap-5">
                    <div class="flex flex-col gap-3 w-full">
                        <div class="input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"><path fill="currentColor" d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm-2 0l-8 5l-8-5zm0 12H4V8l8 5l8-5z"/></svg>
                            <input type="email" class="outline-none" placeholder="Correo electronico">
                        </div>
                        <div class="input">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 17a2 2 0 0 1-2-2c0-1.11.89-2 2-2a2 2 0 0 1 2 2a2 2 0 0 1-2 2m6 3V10H6v10zm0-12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V10c0-1.11.89-2 2-2h1V6a5 5 0 0 1 5-5a5 5 0 0 1 5 5v2zm-6-5a3 3 0 0 0-3 3v2h6V6a3 3 0 0 0-3-3" />
                            </svg>
                            <input type="password" class="outline-none" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <input type="checkbox" class="w-4 h-4 checked:bg-gray-200">
                            <span class="ml-2.5 ">Recuerdame</span>
                        </div>
                        <div>
                            <a href="#" class="hover:underline">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                    <button
                        class="self-center w-[120px] py-1 bg-black text-white font-bold rounded-md ease hover:bg-black/85">
                        Entrar
                    </button>
                </form>
                <div class="flex justify-center items-center gap-2.5">
                    <span class="h-[0.5px] w-[90px] bg-black inline-block"></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10s10-4.47 10-10S17.53 2 12 2m0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8s8 3.58 8 8s-3.58 8-8 8"/></svg>
                    <span class="h-[0.5px] w-[90px] bg-black inline-block"></span>
                </div>
                <div class="w-full flex justify-evenly">
                    <p>¿No tienes una cuenta?</p>
                    <a href="#" class="text-link hover:underline">Regístrate aquí</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
