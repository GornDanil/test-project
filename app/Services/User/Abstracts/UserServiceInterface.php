<?php

namespace App\Services\User\Abstracts;
interface UserServiceInterface
{
    public function getUsers();
    public function registration(object $data);
    public function login(object $data);

}
