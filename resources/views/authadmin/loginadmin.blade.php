<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('loginadmin.create') }}">
            @csrf

            <div>
                <x-label for="correo" value="{{ __('Correo') }}" />
                <x-input id="correo" class="block mt-1 w-full" type="correo" name="correo" :value="old('correo')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="contraseña" value="{{ __('Contraseña') }}" />
                <x-input id="contraseña" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ms-1 me-8 mf p-3">
                    {{ __('Registrarse') }}
                </x-button>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Iniciar Sesion') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>