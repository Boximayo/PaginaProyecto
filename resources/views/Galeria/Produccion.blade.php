@extends('Layout/layout')
@section('primero', 'Galeria')
@section('segundo', 'Produccion')

@section('content')
<div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">

    <div
        class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <!-- Image -->
        <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
            src="../Imagenes/miel/prod.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">Produccion miel</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Imagenes de como se muestra la produccion de miel</p>
        </div>
        <!-- CTA -->
        <div class="m-2">
            <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                mas ...</a>
        </div>
    </div>
    <div
        class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <!-- Image -->
        <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
            src="../Imagenes/miel/prod2.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">Produccion jalea real</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Imagenes de como se muestra la produccion de jalea real</p>
        </div>
        <!-- CTA -->
        <div class="m-2">
            <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                mas ...</a>
        </div>
    </div>
    <div
        class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <!-- Image -->
        <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
            src="../Imagenes/miel/prod3.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">Produccion de polen</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Imagenes de como se muestra la produccion de polen</p>
        </div>
        <!-- CTA -->
        <div class="m-2">
            <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                mas ...</a>
        </div>
    </div>
</div>
@endsection
