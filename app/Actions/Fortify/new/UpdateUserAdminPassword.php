<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserAdminPassword implements UpdatesUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and update the user's password.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'current_password' => ['required', 'string', 'current_password:web'],
            'contraseña' => $this->passwordRules(),
        ], [
            'current_password.current_password' => __('La contraseña proporcionada no coincide con la contraseña actual.'),
        ])->validateWithBag('updatePassword');

        $user->forceFill([
            'contraseña' => Hash::make($input['contraseña']),
        ])->save();
    }
}
