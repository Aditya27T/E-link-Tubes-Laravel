<?php
namespace App\Contracts\Auth;

interface AuthServiceInterface {
    public function register(array $data);
    public function attemptLogin(array $credentials);
    public function logout();
}