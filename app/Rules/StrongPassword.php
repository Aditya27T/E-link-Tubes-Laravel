<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPassword implements Rule {
    public function passes($attribute, $value) {
        return preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $value);
    }

    public function message() {
        return 'Password must contain uppercase, lowercase, number, special character and minimum 8 characters.';
    }
}
