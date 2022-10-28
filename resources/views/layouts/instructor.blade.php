<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

          
            <!-- Page Content -->
            <div class="container py-8 grid grid-cols-5">
                <aside>
                    <h1>Edicion del curso</h1>
                    <ul class="text-sm text-gray-600">
                        <li class="leading-7 mb-1 border-l-4 border-indigo-400  @routeIs('instructor.courses.edit',$course) border-indigo-400 @else border-transparent @endif pl-2 ">
                            <a href="{{ route('instructor.courses.edit',$course) }}" class="font-bold text-lg mb-4">informacion del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4 @routeIs('instructor.courses.curriculum',$course) border-indigo-400 @else border-transparent @endif pl-2">
                            <a href="{{ route('instructor.courses.curriculum',$course) }}">Lecciones</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4  border-transparent pl-2">
                            <a href="">Metas del curso</a>
                        </li>
                        <li class="leading-7 mb-1 border-l-4  border-transparent pl-2">
                            <a href="">Estudiantes</a>
                        </li>
                    </ul>
                </aside>
                
                <main class="col-span-4 card"> 
                    <div class="card-body text-gray-600 ">
                     {{ $slot }}
                    </div>
                </main>
        
            </div>
        </div>

        @stack('modals')

        @livewireScripts

        @isset($js)
        {{ $js }}

        @endisset

        
    </body>
</html>
