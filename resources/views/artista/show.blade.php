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
                        <div><img class="rounded" width="60%" src="{{asset($foto)}}"></div>
                        <div>
                            <p class="text-xl">Matricula: {{$mycar->matricula}}</p>
                            <p class="text-xl">Marca: {{$mycar->marca}}</p>
                            <p class="text-xl">Modelo: {{$mycar->modelo}}</p>
                            <p class="text-xl">Color: {{$mycar->color}}</p>
                            <p class="text-xl"> {{$mycar->matricula}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
