<?php

namespace App\Repositories\User\Abstracts;

use App\DTO\RegistrationData;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories\Auth;
 */
interface UserRepositoryInterface extends RepositoryInterface
{
    /**
     * Checking the existence of the user
     *
     * @param RegistrationData $data
     * @return boolean
     */
    public function checkUser(RegistrationData $data): bool;

    /**
     * Getting a user by name
     *
     * @param string $name
     * @return ?object
     */
    public function getUserByName(string $name): ?object;
}
