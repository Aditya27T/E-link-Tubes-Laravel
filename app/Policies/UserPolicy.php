<?php
namespace App\Policies;

use App\Models\User;
use App\Enum\UserRole;

class UserPolicy
{
    public function viewAny(User $user)
    {
        return $user->hasRole([UserRole::SUPER_ADMIN->value, UserRole::ADMIN->value]);
    }

    public function view(User $user, User $model)
    {
        return $user->hasRole([UserRole::SUPER_ADMIN->value, UserRole::ADMIN->value])
            || $user->id === $model->id;
    }

    public function create(User $user)
    {
        return $user->hasRole(UserRole::SUPER_ADMIN->value);
    }

    public function update(User $user, User $model)
    {
        return $user->hasRole(UserRole::SUPER_ADMIN->value)
            || $user->id === $model->id;
    }

    public function delete(User $user, User $model)
    {
        return $user->hasRole(UserRole::SUPER_ADMIN->value);
    }
}