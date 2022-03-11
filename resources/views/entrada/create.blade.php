<x-app-layout>

    <body class="font-mono bg-gray-400">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12 pb-3">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex pt-3">
                <!-- Col -->
                <div
                    class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://images.unsplash.com/photo-1604953622228-f705fd2dc641?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=705&q=80')"
                >
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Nueva Entrada</h3>
                    <form method="POST" action="{{route('ticket.store')}}"
                          class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="fest">
                                Festival
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
                                <option value="0" selected>0 - Sin festival</option>
                                @foreach($festivales as $fest)
                                    <option value="{{$fest->id}}">{{$fest->id}} - {{$fest->nombre}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="user">
                                Usuario
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
                                    name="user" id="user">
                                <!-- <option value="0" selected>0 - Sin festival</option> -->
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->id}} - {{$user->nombre}} {{$user->apellidos}}
                                        - {{$user->email}} </option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-6 text-center">
                            <input type="submit"
                                   class="w-full px-4 py-2 font-bold text-white bg-blue-700 rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                                   value="Crear entrada"
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
