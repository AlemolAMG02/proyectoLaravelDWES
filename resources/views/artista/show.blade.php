<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <div class="grid grid-rows-1 grid-flow-col gap-4">
                        <div><img class="rounded" width="60%" src="{{$artist->foto}}"></div>
                        <div>
                            <p class="text-xl">Matricula: {{$artist->nombre}}</p>
                            <p class="text-xl">Descpri: {{$artist->descripcion}}</p>
                            <p class="text-xl">Estilo: {{$artist->estilo}}</p>
                            <p class="text-xl">Participa en: {{$fest->nombre}}</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
