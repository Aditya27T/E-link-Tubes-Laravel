<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Super Admin
        $superAdmin = User::factory()
            ->superAdmin()
            ->create();
        $superAdmin->assignRole('super_admin');

        // Create 3 Admins
        User::factory()
            ->count(3)
            ->admin()
            ->create()
            ->each(function ($user) {
                $user->assignRole('admin');
            });

        // Create 20 Regular Users
        User::factory()
            ->count(20)
            ->create()
            ->each(function ($user) {
                $user->assignRole('user');
            });

        // Create 5 Unverified Users
        User::factory()
            ->count(5)
            ->create()
            ->each(function ($user) {
                $user->assignRole('user');
            });
    }
}