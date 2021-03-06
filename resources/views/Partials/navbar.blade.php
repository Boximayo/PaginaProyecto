
<nav class="bg-gradient-to-r from-amber-400 to-amber-300 border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="/" class="flex">
            <img src="https://img.icons8.com/color/48/000000/honey-dipper-with-honey-dripping.png" />
            <span class="text-gray-700 ml-5 self-center text-lg font-semibold whitespace-nowrap">Miel</span>
        </a>
        <div class="flex md:order-2">
            <div class="hidden relative mr-3 md:mr-0 md:block">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="email-adress-icon"
                    class="block p-2 pl-10 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-sm focus:ring-blue-500 focus:border-blue-500 "
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="mobile-menu-3" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                aria-controls="mobile-menu-3" aria-expanded="false">
                <span class="sr-only">Menu Principal</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            
        </div>
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-3">
            <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li>
                    <a href="/"
                        class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Inicio</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto ">Productos
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                        class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow ">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{route('productos.paletas')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Paletas de
                                    Miel</a>
                            </li>
                            <li>
                                <a href="{{route('productos.polen')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Polen</a>
                            </li>
                            <li>
                                <a href="{{route('productos.jalea')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Jalea
                                    Real</a>
                            </li>
                            <li>
                                <a href="{{route('productos.propoleo')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Propoleo</a>
                            </li>
                        </ul>

                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto ">Galeria
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar2"
                        class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow ">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{route('galerias.granja')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Granja de
                                    Abejas</a>
                            </li>
                            <li>
                                <a href="{{route('galerias.tiendas')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Nuestras
                                    Tiendas</a>
                            </li>
                            <li>
                                <a href="{{route('galerias.produccion')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Producci??n</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
                        class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto ">Ubicaciones
                        <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar3"
                        class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow ">
                        <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="{{route('ubicaciones.centro')}}"
                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Centro</a>
                            </li>
                            <li>
                                <a href="{{route('ubicaciones.cantera')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">La
                                    Cantera</a>
                            </li>
                            <li>
                                <a href="{{route('ubicaciones.loma')}}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">La
                                    Loma</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{route('contactanos')}}"
                        class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Contactanos</a>
                </li>
                <li>
                    <a href="{{route('mapa')}}"
                        class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">Mapa de Sitio</a>
                </li>
                <li>
                    @guest
                    @if (Route::has('login'))

                    <button id="dropdownNavbarLink11" data-dropdown-toggle="dropdownNavbar11" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">Ingresar <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar11" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{ route('login') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Iniciar Sesi??n</a>
                          </li>
                          <li>
                            <a href="{{ route('register') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">Registrarme</a>
                          </li>
                        </ul>
                    </div>
                </li>
              </ul>

                    @endif

                    @else
                    <button id="dropdownNavbarLink10" data-dropdown-toggle="dropdownNavbar10" class="flex justify-between items-center py-2 pr-4 pl-3 w-full font-medium text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto">{{ Auth::user()->name }} <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar10" class="hidden z-10 w-44 text-base list-none bg-white rounded divide-y divide-gray-100 shadow">
                        <ul class="" aria-labelledby="dropdownLargeButton">
                          <li>
                            <a href="{{ route('profile.show') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Perfil</a>
                          </li>

                          @if(Auth::user()->role == 'admin')
                          <li>
                            <a href="{{ route('dashboard') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Administraci??n</a>
                          </li>
                          @endif
                        </ul>
                        <div class="py-1">
                            <a href="{{ route('logout') }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Cerrar Sesi??n') }}
                         </a>
    
                         <form id="logout-form" action="{{ route('logout') }}" method="POST">
                             @csrf
                         </form>
                        </div>
                    </div>
                </li>
              </ul>
            </div>

                    {{-- <li>
                        <a>
                            <li>
                                <a href="{{ route('profile.show') }}"
                            class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 ">{{ Auth::user()->name }}</a>
                            </li>
                        </a>
                        
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Cerrar Sesi??n') }}
                     </a>

                     <form id="logout-form" action="{{ route('logout') }}" method="POST">
                         @csrf
                     </form>
                    </li> --}}
                    @endguest
                </li>

            </ul>
        </div>
    </div>
</nav>



