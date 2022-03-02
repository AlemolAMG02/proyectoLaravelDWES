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

                    <div class="grid grid-flow-col gap-4">
                        <div class="mx-auto">
                            <img class="p-0 m-0" src="{{asset($artist->foto)}}" alt="{{$artist->foto}}">
                        </div>
                        <div class="mx-auto">
                            <p class="text-xl">Nombre Artista: {{$artist->nombre}}</p>
                            <p class="text-xl">Estilo: {{$artist->estilo}}</p>
                            <p class="text-xl">Descripción: {{$artist->descripcion}}</p>
                        </div>

                    </div>

                    @if(isset($fest))
                        <div id="Festival" class="pt-5 pb-2">
                            <h2 class="text-3xl text-center">Festival donde participa</h2>
                            <a class="" href="{{route('festival.show',$fest->id)}}">
                                <div
                                    class="rounded grid grid-flow-col bg-blue-200">
                                    <div>
                                        <img class="w-full" src="{{asset($fest->imagen)}}" alt="{{$fest->imagen}}">
                                    </div>
                                    <div class="px-6 py-4">
                                        <h2 class="font-bold text-xl mb-2">{{$fest->nombre}}</h2>
                                        <p class="text-gray-700 text-base">
                                            {{$fest->descripcion}}
                                        </p>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
