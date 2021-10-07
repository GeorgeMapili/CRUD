<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function createUser($userData)
    {
        return User::create([
            'name' => $userData->name,
            'email' => $userData->email,
            'password' => Hash::make($userData->password),
        ]);
    }

    public function updateUser($id, $userData)
    {
        return User::where('id', $id)->update([
            'name' => $userData->name,
            'email' => $userData->email,
        ]);
    }

}