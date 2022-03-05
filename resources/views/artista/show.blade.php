<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __($artist->nombre) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200">

                    <div class="grid md:grid-flow-col bg-yellow-300">
                        <div class="justify-start m-0 p-0">
                            <img class="p-0 m-0" src="{{asset($artist->foto)}}" alt="{{$artist->foto}}">
                        </div>
                        <div id="datosArtista" class="bg-red-200 p-3">
                            <h1 class="text-4xl text-center font-bold">{{$artist->nombre}}</h1>
                            <br>
                            <h2 class="mx-1 font-bold">Estilo: </h2>
                            <p class="mx-2 px-1">{{$artist->estilo}}</p>
                            <br>
                            <p class="mx-1 font-bold">Descripción: </p>
                            <p class="mx-2 px-1 text-justify">{{$artist->descripcion}}</p>

                        </div>

                    </div>

                    @if(isset($fest))
                        <div id="Festival" class="p-2 pt-5 rounded-md">
                            <h2 class="text-3xl text-center">Festival donde participa</h2>
                            <a class="rounded-md " href="{{route('festival.show',$fest->id)}}">
                                <div
                                    class="rounded-md grid grid-flow-col bg-blue-200">
                                    <img class="w-full rounded-md " src="{{asset($fest->imagen)}}"
                                         alt="{{$fest->imagen}}">
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
