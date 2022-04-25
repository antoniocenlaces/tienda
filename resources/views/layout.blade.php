<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>
<body class="px-4 py-4">

<header class="bg-header h-15v flex flex-row justify-between items-center sticky top-0 p-8">
    <img style="height: 6rem" src="{{asset("images/ironlogo.png")}}" alt="Logo de la compañía">
    <h1 class="max-h-full text-6xl text-red-100">Venta de tecnología</h1>
    <div class="logueo">
        @auth
            <h2>Usuario {{auth()->user()->name}}</h2>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <x-button class="bg-amber-400">Logout</x-button>
            </form>
        @endauth
        @guest
            <form action="{{route('login')}}" method="POST">
                @csrf
            <x-input name="email" placeholder="email" value="{{old('email')}}"></x-input>
            <x-input name="password" placeholder="password"></x-input>
                <br>
                <x-button>Login</x-button>
                <x-ancla ref="{{route('register')}}">Registrarme</x-ancla>
                @if ($errors->any())
                    <h2>Login Error</h2>
                @endif
            </form>
        @endguest
    </div>
</header>
<nav class="py-4">
    @yield("menu")
</nav>
<main>
    @yield("contenido")
</main>
<footer class="py-4">
    @yield("pie de página")
</footer>


</body>
</html>
