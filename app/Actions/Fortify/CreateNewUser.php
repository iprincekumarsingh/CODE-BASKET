<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Str;

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
            'password' =>['required'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $customemail = $input['email'];
        $pos = strpos($customemail, '@');
        $username = Str::substr($customemail, 0, $pos);
        return User::create([
            'name' => $input['name'],
            'user_role_type'=>'admin',
            'email' => $input['email'],
            'username' => $username,
            'password' => Hash::make($input['password']),
        ]);
    }
}
