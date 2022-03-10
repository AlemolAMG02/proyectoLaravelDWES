<x-app-layout>

    <div class="py-12">
        <div class="md:max-w-7xl xl:max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- <p class="bg-gray-100"> esto es la vista principal </p> -->

                    <div id="boxCartas" class="grid md:grid-cols-3 justify-center pt-2">

                        <x-menuCard btnText="Ver Festivales" link="festival.index"
                                    imagen="storage/festivalPhotos/festival2.jpg" color="blue">
                            <x-slot name="titulo">Festivales</x-slot>
                            Muestra la lista de festivales para que eligas tu favorito.
                        </x-menuCard>

                        <x-menuCard btnText="Ver Entradas" link="ticket.index"
                                    imagen="storage/festivalPhotos/festival1.jpg" color="red">
                            <x-slot name="titulo">Mis Entradas</x-slot>
                            Encuentra todas tus entradas guardadas aquí.
                        </x-menuCard>

                        <x-menuCard btnText="Ver Artistas" link="artist.index"
                                    imagen="storage/festivalPhotos/festival4.jpg" color="yellow">
                            <x-slot name="titulo">Artistas</x-slot>
                            Descubre los artistas invitados a los diferentes eventos.
                        </x-menuCard>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
