<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
        <title>@yield('title', 'Bontomanai')</title>

        <link rel="icon" type="image/png" href="{{ asset('images/Logo_Jeneponto.png') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
                rel="stylesheet">
        {{-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script> --}}
        <style>
                body {
                        font-family: 'Plus Jakarta Sans', sans-serif;
                }
        </style>
</head>

<body>
        <!-- nav bar section -->
        @include('partials.headers')


        <!-- content section -->
        <main>
                @yield('content')

        </main>

        <!-- footer -->
        @include('partials.footers')

        <script>
                document.addEventListener("DOMContentLoaded", function() {
                        const button = document.getElementById("hamburger");
                        const icons = document.querySelectorAll(".toggle");

                        button.addEventListener("click", function() {
                                icons.forEach(icon => icon.classList.toggle("hidden"));
                        });
                });
        </script>

</body>

</html>
