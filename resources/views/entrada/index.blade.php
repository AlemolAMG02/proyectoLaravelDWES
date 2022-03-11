<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center font-bold text-2xl">LISTA DE ENTRADAS</h1>
                    <!--TODO: Cambiar propiedades del H1 para que se vea correctamente -->
                    <div>
                        @foreach($festivales as $fest)
                            <h2 class="font-bold py-1">{{$fest->nombre}}</h2>
                            <div id="boxCartas" class="grid md:grid-cols-3 justify-center py-1">
                                @foreach($tickets as $t)
                                    @if($t->idFestival === $fest->id)
                                        <a class="max-w-sm rounded-md overflow-hidden md:mx-2 my-2  bg-blue-200"
                                           href="#">

                                            <div class="px-6 py-4">
                                                <h2 class="font-bold text-xl mb-2">{{$fest->nombre}} - {{$t->id}}</h2>
                                            </div>
                                            <div class="grid px-6 pt-4 pb-2 flex justify-between">
                                                <p class="">Precio Entrada: {{$fest->precio}}</p>
                                                <form action="{{route('ticket.destroy',$t->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                            class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-xl text-blue-400 mr-2 mb-2">
                                                        Devolver Entrada
                                                    </button>
                                                </form>

                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <hr>
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
