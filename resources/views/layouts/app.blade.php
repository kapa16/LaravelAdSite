<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('interface.app_title') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css', 'build') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js', 'build') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex flex-col h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
{{--            <header class="bg-white shadow dark:bg-gray-800">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

            <!-- Page Content -->
            <main class="flex-grow">
                <div class="max-w-7xl mx-auto p-3">
                    @section('breadcrumbs', \Diglactic\Breadcrumbs\Breadcrumbs::render())
                    @yield('breadcrumbs')
                </div>
                @include('layouts.partials.flash')
                {{ $slot }}
            </main>

            <footer class="border-t-2">
                <div class="max-w-7xl mx-auto p-3">
                    <p>&copy; {{ date('Y') }}</p>
                </div>
            </footer>
        </div>
    </body>
</html>
