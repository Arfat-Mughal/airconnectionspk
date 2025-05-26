<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Air Connections')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
    @yield('styles')
</head>

<body class="d-flex flex-column min-vh-100">
    @include('includes.header')

    @yield('banner') {{-- Banner section (optional) --}}

    <main class="container py-4 flex-grow-1">
        @yield('content')
    </main>

    @include('includes.footer')

    @livewireScripts
</body>

</html>