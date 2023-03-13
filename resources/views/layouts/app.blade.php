<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gwap - @yield('titulo')</title>
    @vite(['resources/css/app.scss' , 'resources/js/app.js'])
</head>
<body>
    @include('partials.nav')
    <br>

    @yield('content')

    
</body>
</html>