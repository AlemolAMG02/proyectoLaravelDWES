<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{route('inicio')}}">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-5" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="nombre" :value="__('Nombre')" />

                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus />
            </div>

            <!-- Apellidos -->
            <div class="mt-4">
                <x-label for="apell" :value="__('Apellidos')" />

                <x-input id="apell" class="block mt-1 w-full" type="text" name="apell" :value="old('apell')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- City Address -->
            <div class="mt-4">
                <x-label for="adress" :value="__('Direccion')" />

                <x-input id="adress" class="block mt-1 w-full" type="text" name="adress" :value="old('adress')" required />
            </div>

            <!-- Fecha Nacimiento -->
            <div class="mt-4">
                <x-label for="fnac" :value="__('Fecha nacimiento')" />

                <x-input id="fnac" class="block mt-1 w-full" type="date" name="fnac" min='1900-01-01' max='2020-12-31' :value="old('fnac')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
