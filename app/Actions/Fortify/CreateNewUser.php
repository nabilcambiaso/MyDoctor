<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\user_informations;
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
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

         User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'user_type' => $input['user_type'],
            'password' => Hash::make($input['password']),
        ]);

        $data=User::where('email', '=',  $input['email'])->firstOrFail();
         user_informations::create([
        'user_id' => $data->id,
        'first_name' => $input['name'],
        'last_name' => $input['last_name'],
        'phone_number' => $input['phone_number'],
        'dbo' => $input['dob'],
        'speciality_id' => $input['doc_speciality'],
        'adress' => $input['address'],
        ]);

        return $data;
        
    }
}
