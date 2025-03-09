<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @Vite('resources/css/app.css')
</head>
<body>
    
    <nav class="bg-gray-800 text-white py-3 px-4 flex items-center justify-between">
        <a class="font-bold text-xl tracking-tight" href="#">Mini Instagram</a>
        <div class="flex items-center">
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="{{ route('posts.index') }}">Posts</a>
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="/login">Login</a>
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="#">Registro</a>
            @auth
            <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="{{ route('posts.create') }}">Crear nuevo Post</a>
            @endauth
        </div>
    </nav>
   @include('partials.menu')
    



    @yield('contenido')
</body>
</html>