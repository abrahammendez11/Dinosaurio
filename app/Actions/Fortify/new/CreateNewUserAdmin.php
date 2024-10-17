<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUserAdmin implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'nombre' => ['required', 'string', 'max:255'],
            'correo' => ['required', 'string', 'email', 'max:255', 'unique:useradmin'],
            'contraseña' => $this->passwordRules(),
            'numeroEmpleado' => ['required', 'string', 'max:40'],
            'puesto' => ['required', 'string', 'max:50'],
            'departamento' => ['required', 'string', 'max:30'],
            'numeroTelefono' => ['required', 'string', 'max:15'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'nombre' => $input['nombre'],
                'correo' => $input['correo'],
                'contraseña' => Hash::make($input['contraseña']),
                'numeroEmpleado' => $input['numeroEmpleado'],
                'puesto' => $input['puesto'],
                'departamento' => $input['departamento'],
                'numeroTelefono' => $input['numeroTelefono'],
            ]), function (User $user) {
                $this->createTeam($user);
            });
        });
    }

    /**
     * Create a personal team for the user.
     */
    protected function createTeam(User $user): void
    {
        $user->ownedTeams()->save(Team::forceCreate([
            'user_id' => $user->id,
            'nombre' => explode(' ', $user->nombre, 2)[0]."'s Team",
            'personal_team' => true,
        ]));
    }
}
