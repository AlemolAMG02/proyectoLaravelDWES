<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center text-2xl">LISTA DE FESTIVALES</h1>
                    <!--TODO: Cambiar propiedades del H1 para que se vea correctamente -->
                    <!-- component -->

                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center pt-3">
                        @foreach($festivales as $fest)
                            <a class="" href="{{route('festival.show',$fest->id)}}">
                                <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-blue-200">
                                    <img class="w-full" src="{{$fest->imagen}}" alt="{{$fest->imagen}}">
                                    <div class="px-6 py-4">
                                        <h2 class="font-bold text-xl mb-2">{{$fest->nombre}}</h2>
                                        <p class="text-gray-700 text-base">
                                            {{$fest->descripcion}}
                                        </p>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>

                    @if(session('error') == 1)
                        <br>ERROR EN LA DB;
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
