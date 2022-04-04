@extends('Layout/layout')
@section('primero', '')
@section('segundo', '')
@section('content')
    <H1 class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items font-bold text-lg mb-2 my-2">PRODUCTOS</H1>

    <div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items ">
        @foreach ($productos as $item)
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
        @endforeach
    </div>

    <H1 class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items font-bold text-lg mb-2 my-2">UBICACIONES</H1>

    <div class="bg-gray-100 w-full gap-4 flex-wrap flex justify-center items">
        @foreach ($ubicaciones as $item)
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
        @endforeach
    </div>





    <div id="indicators-carousel" class="relative mt-5 mb-7" data-carousel="static">

        <div class="overflow-hidden relative h-48 rounded-lg sm:h-64 xl:h-80 2xl:h-96">

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20"
                data-carousel-item="active">
                <img src="https://p4.wallpaperbetter.com/wallpaper/446/941/137/honey-wallpaper-preview.jpg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <img src="https://s1.1zoom.me/b5651/668/Honey_Pastry_Wood_planks_Jar_553811_1920x1080.jpg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                <img src="https://images5.alphacoders.com/402/thumb-1920-402703.jpg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                <img src="http://www.senasa.gob.ar/sites/default/files/noticias/imagenes/colmena.jpg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>

            <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10"
                data-carousel-item="">
                <img src="https://s3.amazonaws.com/arc-wordpress-client-uploads/infobae-wp/wp-content/uploads/2018/11/04092518/abeja_1.jpg"
                    class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
            </div>
        </div>

        <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
            <button type="button" class="w-3 h-3 rounded-full bg-white dark:bg-gray-800" aria-current="true"
                aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button"
                class="w-3 h-3 rounded-full bg-white/50 dark:bg-gray-800/50 hover:bg-white dark:hover:bg-gray-800"
                aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>

        <button type="button"
            class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-prev="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="hidden">Previous</span>
            </span>
        </button>
        <button type="button"
            class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
            data-carousel-next="">
            <span
                class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="hidden">Next</span>
            </span>
        </button>
    </div>




@endsection
