<?php
namespace App\Services\Auth;

use App\Contracts\Auth\AuthServiceInterface;
use App\Repositories\UserRepository;
use App\Enum\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface {
    protected $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function register(array $data) {
        $data['password'] = Hash::make($data['password']);
        $user = $this->userRepository->create($data);
        $user->assignRole(UserRole::USER->value);
        return $user;
    }

    public function attemptLogin(array $credentials) {
        return Auth::attempt($credentials);
    }

    public function logout() {
        Auth::logout();
    }
}