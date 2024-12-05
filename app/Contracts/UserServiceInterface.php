<?php
namespace App\Contracts;

interface UserServiceInterface
{
    public function createUser(array $data);
    public function updateUser(int $id, array $data);
    public function deleteUser(int $id);
}