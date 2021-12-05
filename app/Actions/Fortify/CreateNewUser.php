<?php

namespace App\Actions\Fortify;

use App\Models\MasterAccount;
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
            'email'     => ['required', 'string', 'email', 'max:45'],
            'username'  => ['required', 'string', 'max:25', 'unique:master_account'],
            'pass'      => $this->passwordRules(),
            // 'last_ip'   => request()->ip(),
            'question'  => ['required'],
            'question_response' =>  ['required'],
            'confirm_rules' =>  ['required', 'accepted'],
        ])->validate();

        return MasterAccount::create([
            'email'     => $input['email'],
            'username'  => $input['username'],
            'pass'      => md5($input['pass']),
            // 'last_ip'   => $input['last_ip'],
            'question'  => $input['question'],
            'question_response' => $input['question_response'],
        ]);
    }
}
