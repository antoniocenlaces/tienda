@extends("layout")

@section("menu")
    <x-ancla ref="{{route('productos.index')}}">Productos</x-ancla>
    {{--<x-ancla ref="{{route('register')}}">Registrar</x-ancla>--}}
@endsection
@section("contenido")
    <h1>Página principal</h1>
@endsection
