<div class="max-w-sm rounded-lg overflow-hidden md:mx-2 my-2  bg-{{$color}}-200">
    <img class="w-full" src="{{$imagen}}" alt="Imagen de festivales">
    <div class="px-6 py-4">
        <h2 class="font-bold text-xl mb-2">{{$titulo}}</h2>
        <p class="text-gray-700 text-base">
            {{$slot}}
        </p>
    </div>
    <div class="grid px-6 pt-4 pb-2 justify-center">
        <a href="{{route("$enlace")}}">
            <button type="button"
                    class="inline-block bg-gray-200 rounded-md hover:bg-blue-400 hover:text-white px-3 py-1 text-sm font-semibold text-xl text-blue-400 mr-2 mb-2">
                {{$btnText}}
            </button>
        </a>
    </div>
</div>
