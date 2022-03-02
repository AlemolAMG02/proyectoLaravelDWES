<x-app-layout>

    <body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12 pb-3">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://www.unexpectedvisit.es/wp-content/uploads/2019/03/04178f97b059059327eb992387febe22.jpg')"
                >
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Añadir Artista / Grupo</h3>
                    <form method="POST" action="{{route('artist.store')}}"
                          class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
                                    Nombre Artista / Grupo
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="nombre"
                                    type="text"
                                    placeholder="Nombre Festival"
                                    name="nombre"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="estilo">
                                    Estilo
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="estilo"
                                    type="text"
                                    placeholder="Estilo musical"
                                    name="estilo"
                                />
                            </div>
                        </div>
                        <div class="mb-4 ">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="descrip">
                                Descripción
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="descrip"
                                type="text"
                                placeholder="Descripción"
                                name="descrip"
                            />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="isGroup">
                                    ¿Es un grupo?
                                </label>
                                <input
                                    class="w-full py-2 text-sm leading-tight text-blue-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="isGroup"
                                    type="checkbox"
                                    placeholder="Es grupo"
                                    name="isGroup"
                                    checked
                                />
                            </div>
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="anio">
                                    Año comienzo
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="anio"
                                    type="number"
                                    placeholder="Año comienzo"
                                    name="anio"
                                />
                            </div>

                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="fest">
                                Festival al que asiste
                            </label>
                            <select class="form-select form-select-lg mb-3
                                      appearance-none
                                      block
                                      w-full
                                      px-4
                                      py-2
                                      font-normal
                                      text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                      rounded-md
                                      transition
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    name="fest" id="fest">
                                <option value="0" selected>Sin festival</option>
                                @foreach($festivales as $fest)
                                    <option value="{{$fest->id}}">{{$fest->id}} - {{$fest->nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4 ">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="foto">
                                    Foto
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="foto"
                                    type="file"
                                    placeholder="Imagen del Artista / Grupo"
                                    name="foto"
                                />
                            </div>
                        </div>

                        <div class="mb-6 text-center">
                            <input type="submit"
                                   class="w-full px-4 py-2 font-bold text-white bg-blue-700 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                   value="Añadir Artista / Grupo"
                            >
                        </div>
                        <hr class="mb-6 border-t"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</x-app-layout>
