<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="font-sans antialiased bg-white">
        @include('components.navbaradmin')
        <div class="min-h-screen">
            @yield('content')
        </div>
        @include('components.footer')
    </body>
</html>
