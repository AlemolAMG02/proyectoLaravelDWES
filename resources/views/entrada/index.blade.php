<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>LISTA DE ENTRADAS</h1>
                    <!--TODO: Cambiar propiedades del H1 para que se vea correctamente -->
                    @foreach($festivales as $fest)
                        {{$fest->nombre}}

                    @endforeach
                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center pt-3">
                        @foreach($tickets as $t)
                            <a class="max-w-sm rounded-md overflow-hidden md:mx-2 my-2  bg-blue-200"
                               href="{{route('artist.show',$t->id)}}">

                                <div class="px-6 py-4">
                                    <h2 class="font-bold text-xl mb-2">{{$t->id}}</h2>
                                </div>
                                <div class="grid px-6 pt-4 pb-2 justify-center">
                                    <h2>Precio Entrada: {{$t->precio}}</h2>
                                </div>
                                <div class="grid px-6 pt-4 pb-2 justify-center">
                                    <h2>Precio Entrada: {{$t->precio}}</h2>
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
