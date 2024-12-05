<?php

namespace App\Http\Requests\Auth;

use App\Rules\StrongPassword;
use App\Rules\ValidUsername;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'username' => ['required', new ValidUsername],
            'password' => ['required', 'confirmed', new StrongPassword],
        ];
    }
}