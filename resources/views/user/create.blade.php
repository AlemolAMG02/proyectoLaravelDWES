<x-app-layout>

    <body class="font-mono bg-red-400">
    <!-- Container -->
    <div class="container mx-auto ">
        <div class="flex justify-center px-5 py-5 my-0 pb-3">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div
                    class="w-full h-auto hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url({{asset('storage/festivalPhotos/festivalPrimeraPersona.jpg')}})"
                >
                </div>

                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Añadir Usuario</h3>
                    <form method="POST" action="{{route('user.store')}}"
                          class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="nombre">
                                    Nombre
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="nombre"
                                    type="text"
                                    placeholder="Nombre"
                                    name="nombre"
                                />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="ape">
                                    apellidos
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="ape"
                                    type="text"
                                    placeholder="Apellidos"
                                    name="ape"
                                />
                            </div>
                        </div>
                        <div class="mb-4 ">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                email
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="email"
                                type="email"
                                placeholder="Email"
                                name="email"
                            />
                        </div>

                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="fechaNac">
                                    Fecha Nacimiento
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="fechaNac"
                                    type="date"
                                    placeholder="Fecha Nacimiento"
                                    name="fechaNac"
                                />
                            </div>
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="rol">
                                    Rol del usuario
                                </label>
                                <select class="form-select form-select-lg mb-3
                                      appearance-none
                                      block
                                      w-full
                                      px-7
                                      py-2
                                      font-normal
                                      justify-start
                                      align-middle
                                      text-gray-700
                                      bg-white bg-clip-padding bg-no-repeat
                                      border border-solid border-gray-300
                                      rounded-md
                                      transition
                                      shadow
                                      ease-in-out
                                      m-0
                                      focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:shadow-outline"
                                        name="rol" id="rol">
                                    @foreach($roles as $rol)
                                        <option value="{{$rol->id}}">{{$rol->id}} - {{$rol->name}} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-4 ">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="direccion">
                                Dirección
                            </label>
                            <input
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="direccion"
                                type="text"
                                placeholder="Dirección"
                                name="direccion"
                            />
                        </div>

                        <div class="mb-4">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="pass">
                                    Contraseña
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="pass"
                                    type="text"
                                    placeholder="Contraseña para el usuario"
                                    name="pass"
                                />
                            </div>

                        </div>

                        <div class="mb-6 text-center">
                            <input type="submit"
                                   class="w-full px-4 py-2 font-bold text-white bg-blue-700 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                   value="Añadir usuario"
                            >
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</x-app-layout>
