@extends('Layout/layout')
@section('primero', 'Galeria')
@section('segundo', 'Granja de Abejas')

@section('content')
<div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">

            <div
                class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
                <!-- Image -->
                <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
                    src="../Imagenes/miel/granja.jpeg"
                    alt="">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2 ">Granja abejas reyna</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">En esta granja de abejas se encuentra la mayor produccion de miel y jalea real</p>
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
                    src="../Imagenes/miel/granja2.jpg"
                    alt="">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2 ">Granja abejas con produccion de propoleo</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">En esta granja de abejas se encuentra el propolio, uno de sus principales productos para la elaboracion de dicho elemento</p>
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
                    src="../Imagenes/miel/granja3.jpg"
                    alt="">
                <div class="p-2">
                    <!-- Heading -->
                    <h2 class="font-bold text-lg mb-2 ">Granja de jalea real</h2>
                    <!-- Description -->
                    <p class="text-sm text-gray-600">En esta granja de abejas se encuentra la produccion de la jalea real y sus derivados</p>
                </div>
                <!-- CTA -->
                <div class="m-2">
                    <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                        mas ...</a>
                </div>
            </div>
</div>
@endsection
