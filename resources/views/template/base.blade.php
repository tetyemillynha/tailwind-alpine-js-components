<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!--Scripts-->
        <script async src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="h-full">
        <header class="header bg-white border-b border-indigo-100 sticky top-0 z-10">
            <div class="xl:container lg:container md:container sm:container container">
                @include('components.navbar-apjs', [
                    'menu' => [
                        'link_class' => 'text-indigo-800 hover:text-indigo-900 uppercase',
                        'dropdown' => [
                            'class'      => 'bg-indigo-600',
                            'link_class' => 'text-white hover:text-indigo-200'
                        ] 
                    ]
                ])
            </div>
        </header>

        <main class="relative">
            @yield('content')
        </main>
    </body>
</html>
