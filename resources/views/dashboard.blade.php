<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- <title>{{ config('app.name', 'COSSIES') }}</title> --}}
    
       {{--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  --}}
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/colors.css') }}">
        <link rel="stylesheet" href="{{ asset('css/master.css') }}">
        <link rel="stylesheet" href="{{ asset('css/carrusel.css') }}">
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>
    
    <body>
    
      {{--   @include('navigation-menu') --}}
        <aside id="logo-sidebar" class="fixed top-16 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800 mt-4">
                <ul class="space-y-1 font-medium">
                    <li>
                        <a href="{{ route('dashboard') }}">
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-menu-0" data-collapse-toggle="dropdown-menu-0">
                                <i class="fa-solid fa-house"></i>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap"> Inicio </span>
                            </button>
    
                        </a>
    
                    </li>
    
                    <li>
                        <button type="button" class="dropdown-button flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" data-target="dropdown-menu-1">
                            <i class="bi bi-file-earmark-check-fill"></i>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Carta Presentacion
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                        </button>
    
                        <ul id="dropdown-menu-1" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('presentacion.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                    Carta Presentacion/Aceptacion 
                                </a>
                            </li>
                        </ul>
                    </li>
    
                    <li>
                        <button type="button" class="dropdown-button flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" data-target="dropdown-menu-2">
                            <i class="bi bi-person"></i>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Datos de Prestador
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                        </button>
    
                        <ul id="dropdown-menu-2" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('repoact.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                    Datos de Prestador </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="dropdown-button flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" data-target="dropdown-menu-3">
                            <i class="bi bi bi-x-octagon"></i>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Formato de Suspencion
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                        </button>
    
                        <ul id="dropdown-menu-3" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('cancelacion.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                    Formato de Suspencion </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button" class="dropdown-button flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" data-target="dropdown-menu-4">
                            <i class="bi bi-person-check-fill"></i>
                                <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">
                                    Carta de Liberacion
                                </span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                        </button>
    
                        <ul id="dropdown-menu-4" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('liberacion.create')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                    Carta de Liberacion </a>
                            </li>
                        </ul>
                    </li>
    
                </ul>
            </div>
        </aside>
    
    
        <!-- Page Content -->
        {{-- <main class="bg-white dark:bg-gray-800 mt-5">
            <div class="p-4 sm:ml-64 back">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14 dark:text-white">
                    {{ $slot }}
                </div>
            </div>
    
        </main> --}}

    <div class='curruselMargen'>
        <div class='wrap'>
            <ul class='carousel is-set'>
              <li class='carousel-seat'>
                <h2>1</h2>
              </li>
              <li class='carousel-seat'>
                <h2>2</h2>
              </li>
              <li class='carousel-seat'>
                <h2>3</h2>
              </li>
              <li class='carousel-seat'>
                <h2>4</h2>
              </li>
              <li class='carousel-seat'>
                <h2>5</h2>
              </li>
              <li class='carousel-seat is-ref'>
                <h2>6</h2>
              </li>
            </ul>
          </div>
          <div class='controls'>
            <button class='toggle'>Previo</button>
            <button class='toggle' data-toggle='next'>Siguiente</button>
          </div>
            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/carrusel.js') }}"></script>
        <script src="{{ asset('js/sidebarLeft.js') }}"></script>
        @stack('scripts')
    </div>
    </body>
    
    </html>

</x-app-layout>