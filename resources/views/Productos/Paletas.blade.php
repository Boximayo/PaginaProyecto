@extends('Layout/layout')

@section('primero', 'Productos')
@section('segundo', 'Paletas de Miel')

@section('content')

    @foreach ($productos as $item)
    @if ($item->tipo==1)

    <div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">

        <div
            class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
            <!-- Image -->
            <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
                src="/Imagenes/foto2.jpg" alt="">
            <div class="p-2">
                <!-- Heading -->
                <h2 class="font-bold text-lg mb-2 ">{{$item->nombre}}</h2>
                <!-- Description -->
                <p class="text-sm text-gray-600">{{$item->descripcion}}</p>
            </div>
            <!-- CTA -->
            <div class="m-2">
                <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer mas...</a>
            </div>
        </div>

    </div>

    @endif

    @endforeach

@endsection
