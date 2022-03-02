<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($artist->nombre) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="grid grid-rows-1 grid-flow-col gap-4">
                        <div>
                            <img class="w-full" src="{{$artist->foto}}" alt="{{$artist->foto}}">
                        </div>
                        <div>
                            <p class="text-xl">Matricula: {{$artist->nombre}}</p>
                            <p class="text-xl">Descpri: {{$artist->descripcion}}</p>
                            <p class="text-xl">Estilo: {{$artist->estilo}}</p>
                            <p class="text-xl">Datos img: {{$artist->foto}}</p>
                            <p class="text-xl">Festival: {{$fest}}</p>  <!-- No funciona $fest->nombre -->
                        </div>
                        <div>
                            <button type="button"
                                    class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-blue-400 mr-2 mb-2">
                                Reservar Entradas
                            </button>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
