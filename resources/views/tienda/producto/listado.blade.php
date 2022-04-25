@extends("layout")

@section("menu")
    {{--<x-ancla ref="{{route('productos.create')}}">Nuevo roducto</x-ancla>--}}
    <x-ancla ref="{{route('principal')}}" >Volver</x-ancla>
@endsection

@section("contenido")
    <div class="flex flex-column "
    <table>
        <caption>Listado de productos</caption>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre_corto}}</td>
                <td>{{$producto->PVP}}</td>
                <td>Comprar</td>
            </tr>
        @endforeach
        <hr>
       {{-- <div class="p-10">
            {{$productos->links()}}
        </div>--}}
    </table>
@endsection
