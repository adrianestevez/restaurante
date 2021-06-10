<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Restaurante') }}</title>

        <!-- Fonts -->
        <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">-->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

        <!-- Favicons -->
        <link href="{{{ asset('img/favicon.png')}}}" rel="icon">
        <link href="{{{ asset('img/apple-touch-icon.png')}}}" rel="apple-touch-icon">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        

        <!-- Vendor CSS Files -->
        <link href="{{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}}" rel="stylesheet">
        <link href="{{{ asset('vendor/icofont/icofont.min.css')}}}" rel="stylesheet">
        <link href="{{{ asset('vendor/boxicons/css/boxicons.min.css')}}}" rel="stylesheet">
        <link href="{{{ asset('vendor/animate.css/animate.min.css')}}}" rel="stylesheet">
        <link href="{{{ asset('vendor/venobox/venobox.css')}}}" rel="stylesheet">
        <link href="{{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{{ asset('css/inner_styles.css')}}}" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}   
                    </div>    
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
