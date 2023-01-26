<?php

namespace App\Repositories\User\Abstracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository.
 *
 * @package namespace App\Repositories\Auth;
 */
interface UserRepositoryInterface extends RepositoryInterface
{
    public function checkUser(object $data);

    public function getUserByName(string $name);
}
