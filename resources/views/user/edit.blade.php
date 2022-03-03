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
                    style="background-image: url({{asset('storage/festivalPhotos/festivalPrimeraPersona.jpg')}})"
                >
                </div>

                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Añadir Usuario</h3>
                    <form method="POST" action="{{route('user.update',$user->id)}}"
                          class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
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
                                    value="{{$user->nombre}}"
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
                                    value="{{$user->apellidos}}"
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
                                value="{{$user->email}}"
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
                                    value="{{$user->fechaNac}}"
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
                                        <option
                                            @if($rol->id == $user->rol)
                                            selected
                                            @endif
                                            value="{{$rol->id}}">{{$rol->id}} - {{$rol->name}} </option>
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
                                value="{{$user->direccion}}"
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
                                    disabled
                                />
                                <button type="button" id="btnPass" name="btnPass"
                                        class="w-full px-4 py-2 font-bold text-white bg-blue-400 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline">
                                    Activar Pass
                                </button>
                            </div>
                        </div>


                        <div class="mb-6 text-center">
                            <input type="submit"
                                   class="w-full px-4 py-2 font-bold text-white bg-blue-700 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                   value="Añadir usuario"
                            >
                        </div>

                        <hr class="mb-6 border-t"/>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var btnPass = document.getElementById('btnPass');
        btnPass.addEventListener('click', function () {
            var campoPass = document.getElementById('pass');
            if (campoPass.disabled == true) {
                campoPass.disabled = false;
            } else
                campoPass.disabled = true;
        });
    </script>

    </body>
</x-app-layout>
