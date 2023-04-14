<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gwap - @yield('titulo')</title>
    <script src="https://kit.fontawesome.com/7c0880ea98.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.scss' , 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
      
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <add key="webpages:Enabled" value="true" />
</head>
<body>
  

    @yield('content')

    
</body>

</html>