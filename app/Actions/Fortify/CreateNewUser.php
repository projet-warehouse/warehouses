<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
<<<<<<< HEAD
            'number' => ['required', 'string', 'max:14', 'unique:users'],
=======
            //'phone' => ['required', 'digits:10'],
            'phone' => ['required', 'phone'],
>>>>>>> rod90
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
<<<<<<< HEAD
            'number' => $input['number'],
=======
            'phone' => $input['phone'],
>>>>>>> rod90
            'password' => Hash::make($input['password']),
        ]);
    }
}
