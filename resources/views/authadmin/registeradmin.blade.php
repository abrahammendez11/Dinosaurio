<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('registeradmin.create') }}">
            @csrf

            <div>
                <x-label for="nombre" value="{{ __('Nombre Completo') }}" />
                <x-input id="nombre" class="block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required autofocus autocomplete="nombre" />
            </div>

            <div class="mt-4">
                <x-label for="correo" value="{{ __('Correo') }}" />
                <x-input id="correo" class="block mt-1 w-full" type="email" name="correo" :value="old('correo')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="contraseña" value="{{ __('Contraseña') }}" />
                <x-input id="contraseña" class="block mt-1 w-full" type="password" name="contraseña" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="contraseña_confirmation" value="{{ __('Confirma Contraseña') }}" />
                <x-input id="contraseña_confirmation" class="block mt-1 w-full" type="password" name="contraseña_confirmation" required autocomplete="new-password" />
            </div>
            <div class="mt-4">
                <x-label for="numeroEmpleado" value="{{ __('Numero de Empleado') }}" />
                <x-input id="numeroEmpleado" class="block mt-1 w-full" type="text" name="numeroEmpleado" :value="old('numeroEmpleado')" required autofocus autocomplete="numeroEmpleado" />
            </div>
            <div class="mt-4">
                <x-label for="puesto" value="{{ __('Puesto desempeño') }}" />
                <x-input id="puesto" class="block mt-1 w-full" type="text" name="puesto" :value="old('puesto')" required autofocus autocomplete="puesto" />
            </div>

            <div class="mt-4">
                <x-label for="departamento" value="{{ __('Departamento') }}" />
                <x-input id="departamento" class="block mt-1 w-full" type="text" name="departamento" :value="old('departamento')" required autofocus autocomplete="departamento" />
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
