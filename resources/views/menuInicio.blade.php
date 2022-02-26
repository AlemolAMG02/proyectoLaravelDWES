<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="bg-gray-100"> esto es la vista principal </p>

                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center  pt-3">

                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-blue-200">
                            <img class="w-full" src="storage/festivalPhotos/festival2.jpg" alt="Imagen de festivales">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Festivales</h2>
                                <p class="text-gray-700 text-base">
                                    Muestra la lista de festivales para que eligas tu favorito.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('festival.index')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Entrar
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2 bg-red-200">
                            <img class="w-full" src="storage/festivalPhotos/festival1.jpg" alt="Imagen de Entradas">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">Mis Entradas</h2>
                                <p class="text-gray-700 text-base">
                                    Encuentra todas tus entradas guardadas aquí.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('festival.index')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Entrar
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2 bg-blue-200">
                            <img class="w-full" src="storage/festivalPhotos/festivalPrimeraPersona.jpg"
                                 alt="Sunset in the mountains">
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2">Otra Vista</div>
                                <p class="text-gray-700 text-base">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <a href="{{route('festival.index')}}">
                                    <button type="button"
                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                        Entrar
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
