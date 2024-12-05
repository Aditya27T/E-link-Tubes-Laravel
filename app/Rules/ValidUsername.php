<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidUsername implements Rule
{
    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z0-9_-]{3,20}$/', $value);
    }

    public function message()
    {
        return 'Username harus terdiri dari 3-20 karakter dan hanya boleh mengandung huruf, angka, underscore, dan dash.';
    }
}