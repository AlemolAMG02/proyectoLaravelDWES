<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-0 bg-white border-b border-gray-200">

                    <!-- <div id="container" class=" grid md:grid-cols-2  "> -->
                    <div id="container" class="grid grid-flow-col ">
                        <div id="imgArtist" class="justify-start p-0">
                            <img class="md:w-auto md:h-96 h-72 mx-auto"
                                 src="{{asset($fest->imagen)}}" alt="{{$fest->imagen}}">

                        </div>
                        <div id="datosFest" class="bg-red-200 p-3">
                            <h1 class="text-4xl text-center font-bold">{{$fest->nombre}}</h1>
                            <br>
                            <p class="mx-1 font-bold">Estilo: </p>
                            <h2 class="mx-2 px-1">{{$fest->estilo}}</h2>
                            <br>
                            <p class="mx-1 font-bold">Descripción: </p>
                            <p class="mx2 px-1">{{$fest->descripcion}}</p>

                        </div>
                    </div>
                    <div id="artistas">
                        <h2 class="text-center text-3xl">Lista de artistas</h2>
                        <div class="grid grid-cols-5">
                            @foreach($artistas as $art)
                                <a class="" href="{{route('artist.show',$art->id)}}">
                                    <div class="max-w-sm rounded overflow-hidden md:mx-2 my-2 text-center  bg-blue-200">
                                        <h2 class="font-bold text-xl mb-2">{{$art->nombre}}</h2>
                                        <img class="w-full" src="{{asset($art->foto)}}" alt="{{$art->foto}}">
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
