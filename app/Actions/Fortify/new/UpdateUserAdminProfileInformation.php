<?php

namespace App\Actions\Fortify;


use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserAdminProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     * 
     * @param  array<string, mixed>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'email', 'max:255', Rule::unique('usersadmin')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'numeroEmpleado' => ['required', 'string', 'max:40'],
            'puesto' => ['required', 'string', 'max:50'],
            'departamento' => ['required', 'string', 'max:30'],
            'numeroTelefono' => ['required', 'string', 'max:15'],

        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['correo'] !== $user->correo &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'nombre' => $input['nombre'],
                'correo' => $input['correo'],
                'numeroEmpleado' => $input['numeroEmpleado'],
                'puesto' => $input['puesto'],
                'departamento' => $input['departamento'],
                'numeroTelefono' => $input['numeroTelefono'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'nombre' => $input['nombre'],
            'correo' => $input['correo'],
            'correo_verified_at' => null,
            'numeroEmpleado' => $input['numeroEmpleado'],
            'puesto' => $input['puesto'],
            'departamento' => $input['departamento'],
            'numeroTelefono' => $input['numeroTelefono'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
