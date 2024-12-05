<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Services\Role\RoleService;

class RoleSeeder extends Seeder {
    public function run() {
        $roleService = new RoleService();
        $roleService->initializeRoles();
    }
}