@extends('Layout/layout')
@section('primero', '')
@section('segundo', '')
@section('content')
    <H1 class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items font-bold text-lg mb-2 my-2">PRODUCTOS</H1>
    @foreach ($productos as $item)
        <div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items ">

            <div
                class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                <!-- Image -->
                <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
                    src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"
                    alt="">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2 ">{{ $item->nombre }}</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">{{ $item->descripcion }}</p>
                </div>
                <!-- CTA -->
                <div class="m-2">
                    <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                        mas ...</a>
                </div>
            </div>
        </div>
    @endforeach

    <H1 class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items font-bold text-lg mb-2 my-2">UBICACIONES</H1>
    @foreach ($ubicaciones as $item)
        <div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">

            <div
                class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                <!-- Image -->
                <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
                    src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80"
                    alt="">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2 ">{{ $item->nombre }}</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">{{ $item->descripcion }}</p>
                </div>
                <!-- CTA -->
                <div class="m-2">
                    <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                        mas ...</a>
                </div>
            </div>
        </div>
    @endforeach






@endsection
