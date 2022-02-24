<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>LISTA DE FESTIVALES</h1>
                    <!--TODO: Cambiar propiedades del H1 para que se vea correctamente -->
                    <!-- component -->

                    @foreach($festivales as $fest)

                        <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2  bg-blue-200">
                            <img class="w-full" src="{{$fest->imagen}}" alt="{{$fest->imagen}}">
                            <div class="px-6 py-4">
                                <h2 class="font-bold text-xl mb-2">{{$fest->nombre}}</h2>
                                <p class="text-gray-700 text-base">
                                    Muestra la lista de festivales para que eligas tu favorito.
                                </p>
                            </div>
                            <div class="grid px-6 pt-4 pb-2 justify-center">
                                <div class="grid grid-cols-3  ">
                                    <a class="" href="{{route('festival.show',$fest->id)}}">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                                            Mostrar
                                        </button>
                                    </a>
                                    <a href="{{route('festival.edit',$fest->id)}}">
                                        <button
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                            Editar
                                        </button>
                                    </a>
                                    <form action="{{route('festival.destroy',$fest->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">
                                            Borrar
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @if(session('error') == 1)
                        <br>ERROR EN LA DB;
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
