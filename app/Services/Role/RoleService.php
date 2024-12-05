<?php
namespace App\Services\Role;

use Spatie\Permission\Models\Role;
use App\Enum\UserRole;

class RoleService {
    public function initializeRoles() {
        foreach (UserRole::cases() as $role) {
            Role::firstOrCreate(['name' => $role->value]);
        }
    }

    public function assignRole($user, $role) {
        if ($user && UserRole::tryFrom($role)) {
            $user->assignRole($role);
            return true;
        }
        return false;
    }
}