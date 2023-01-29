<?php

namespace App\Services\User\Abstracts;
use App\DTO\LoginData;
use App\DTO\RegistrationData;

interface UserServiceInterface
{
    public function getUsers();

    /**
     * User registration
     *
     * @param RegistrationData $data
     * @return string|null
     */
    public function registration(RegistrationData $data): ?string;

    /**
     * User login
     *
     * @param LoginData $data
     * @return string|null
     */
    public function login(LoginData $data): ?string;

}
