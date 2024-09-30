<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nombre Completo') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Correo') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirma Contraseña') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
           <div class="mt-4">
                <x-label for="escuela" value="{{ __('Escuela') }}" />
                <x-input id="escuela" class="block mt-1 w-full" type="text" name="escuela" :value="old('escuela')" required autofocus autocomplete="escuela" />
            </div>
            <div class="mt-4">
                <x-label for="carrera" value="{{ __('Carrera') }}" />
                <x-input id="carrera" class="block mt-1 w-full" type="text" name="carrera" :value="old('carrera')" required autofocus autocomplete="carrera" />
            </div>

            <div class="mt-4">
                <x-label for="grado" value="{{ __('Grado') }}" />
                <x-input id="grado" class="block mt-1 w-full" type="text" name="grado" :value="old('grado')" required autofocus autocomplete="grado" />
            </div>

            <div class="mt-4">
                <x-label for="numeroTelefono" value="{{ __('Numero de Telefono') }}" />
                <x-input id="numeroTelefono" class="block mt-1 w-full" type="text" name="numeroTelefono" :value="old('numeroTelefono')" required autofocus autocomplete="numeroTelefono" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('¿Ya estas registrado?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
