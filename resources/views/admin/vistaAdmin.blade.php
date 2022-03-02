<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div id="boxCartas" class="grid md:grid-cols-4 justify-center pt-3">

                        <!-- Carta de control de festivales -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-blue-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de festivales</h2>
                                <p class="text-gray-700 text-base">
                                    Controlador para cambiar los datos de los festivales y, eliminar o crear uno.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('listaFest')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista festivales
                                    </button>
                                </a>
                                <a href="{{route('festival.create')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Añadir nuevo festival
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Carta de control de usuarios -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-green-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de Usuarios</h2>
                                <p class="text-gray-700 text-base">
                                    Controlador para gestionar los usuarios de la plataforma.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('listaUsers')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista Usuarios
                                    </button>
                                </a>
                                <a href="{{route('user.create')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Usuario nuevo
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Carta de control de entradas -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-red-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de Entradas</h2>
                                <p class="text-gray-700 text-base">
                                    Controla todas las entradas. Ayuda a gestionar la reserva de las mismas y solucionar
                                    posibles errores.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('listaFest')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista festivales
                                    </button>
                                </a>
                                <a href="{{route('user.create')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Crear nuevo
                                    </button>
                                </a>
                            </div>
                        </div>

                        <!-- Carta de control de Artistas -->
                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-purple-200">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Control de Artistas</h2>
                                <p class="text-gray-700 text-base">
                                    Controla todas las entradas. Ayuda a gestionar la reserva de las mismas y solucionar
                                    posibles errores.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('listaArtist')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Lista artistas
                                    </button>
                                </a>
                                <a href="{{route('artist.create')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Añadir nuevo artista
                                    </button>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

