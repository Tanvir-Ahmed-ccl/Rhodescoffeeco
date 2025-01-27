<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coffee Cart Catering | Mobile Espresso Bar | Central New York</title>

        <link rel="shortcut icon" href="{{asset('favs/favicon-32x32.png')}}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        {{-- Fontowesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

        <style>
            body{
                font-family: "Poppins", sans-serif;
                /* font-weight: 300; */
                font-style: normal;
            }
        </style>

        @vite('resources/css/app.css')
        @vite('resources/js/app.js')

        <script src="https://rhodescoffeeco.17hats.com/vendor/iframeSizer.min.js"></script>
        @inertiaHead
    </head>
    <body class="antialiased">
        @inertia
    </body>
</html>
