<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Festivales') }}
            @if(isset($error))
                <h2 class="text-xl text-red-500" >Error: {{$error}}</h2>
            @endif
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>LISTA DE FESTIVALES</h1>    <!--TODO: Cambiar propiedades del H1 para que se vea correctamente -->
                    <!-- component -->
                    <table class="min-w-full border-collapse block md:table">
                        <thead class="block md:table-header-group">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nombre </th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Estilo </th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Fecha</th>
                            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Opciones</th>

                        </tr>
                        </thead>
                        <tbody class="block md:table-row-group">
                        @foreach($festivales as $fest)
                        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$fest->nombre}}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$fest->estilo}}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">{{$fest->fecha}}</td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell content-start align-content: space-between;">
                                <div class="grid grid-cols-3  ">
                                    <a class="" href="{{route('festival.show',$fest->id)}}">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Mostrar</button>
                                    </a>
                                    <a href="{{route('festival.edit',$fest->id)}}">
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Editar</button>
                                    </a>
                                    <form action="{{route('festival.destroy',$fest->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Borrar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                    @if(session('error') == 1)
                        <br>ERROR EN LA DB;
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
