<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gwap - @yield('titulo')</title>
    <script src="https://kit.fontawesome.com/7c0880ea98.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss' , 'resources/js/app.js'])
</head>
<body>
    @include('partials.settnav')
    

    @yield('content')
</div>
    
</div>

    
</body>
</html>