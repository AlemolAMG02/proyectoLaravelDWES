<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Coches') }}
        </h2>
    </x-slot>

    <body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12 pb-6">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://wallpapers.com/images/high/my-wallpaper-initiald-xjsghl4w638164c9.jpg')"
                >
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Añade tu coche</h3>
                    <form method="POST" action="{{route('car.store')}}" class="px-8 pt-6 pb-8 mb-4 bg-white rounded" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="matricula">
                                    Matrícula
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="matricula"
                                    type="text"
                                    placeholder="Matrícula del coche"
                                    name="matricula"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="marca">
                                    Marca
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="marca"
                                    type="text"
                                    placeholder="Marca coche"
                                    name="marca"
                                />
                            </div>
                        </div>
                        <div class="mb-4 ">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="modelo">
                                    Modelo
                                </label>
                                <input
                                    class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="modelo"
                                    type="text"
                                    placeholder="Matrícula del coche"
                                    name="modelo"
                                />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="year">
                                    Año
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="year"
                                    type="text"
                                    placeholder="Año de fabricación"
                                    name="year"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="color">
                                    Color
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="color"
                                    type="text"
                                    placeholder="Color del coche"
                                    name="color"
                                />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="fecha_ultima_revision">
                                Fecha ultima revisión
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="fecha_ultima_revision"
                                type="date"
                                placeholder="Email"
                                name="fecha_ultima_revision"
                            />
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="foto">
                                    Foto
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="foto"
                                    type="file"
                                    placeholder="Imagen del coche"
                                    name="foto"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="precio">
                                    Precio
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="precio"
                                    type="text"
                                    placeholder="Color del coche"
                                    name="precio"
                                />
                            </div>
                        </div>

                        <div class="mb-6 text-center">
                            <input type="submit"
                                class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                value="Añadir coche"
                            >
                        </div>
                        <hr class="mb-6 border-t" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</x-app-layout>
