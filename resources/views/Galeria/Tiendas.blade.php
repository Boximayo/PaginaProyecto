@extends('Layout/layout')
@section('primero', 'Galeria')
@section('segundo', 'Nuestras Tiendas')

@section('content')
<div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">

    <div
        class="w-60 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
        <!-- Image -->
        <img class="h-40 object-cover rounded-xl" h-40="" object-cover="" rounded-xl"=""
            src="../Imagenes/miel/tiendamiel.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">Tienda la loma</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Ubicacion Centro comercializa productos de Chiapas, artesanales, frescos, naturales y de la mejor calidad en una colaboración directa con las familias y mujeres trabajadoras, productoras y artesanas</p>
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
            src="../Imagenes/miel/tiendamiel2.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">tienda centro</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Creemos que las abejas son nuestras maestras. Estos incansables artesanos nos han enseñado que es posible trabajar para un fin común, que también beneficie a otras especies.</p>
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
            src="../Imagenes/miel/tiendamiel3.jpg"
            alt="">
        <div class="p-2">
            <!-- Heading -->
            <h2 class="font-bold text-lg mb-2 ">tienda cantera</h2>
            <!-- Description -->
            <p class="text-sm text-gray-600">Somos una empresa 100% mexicana iniciada hace mas de 25 años en la Ciudad de Tepic, Nayarit con la finalidad de ser el proveedor más importante de miel de abeja envasada con excelente calidad, dirigida a todos los sectores que la utilicen</p>
        </div>
        <!-- CTA -->
        <div class="m-2">
            <a role="button" href="#" class="text-white bg-purple-600 px-3 py-1 rounded-md hover:bg-purple-700">Leer
                mas ...</a>
        </div>
    </div>
</div>
@endsection
