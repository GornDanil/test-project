<?php

namespace App\Services\User;
use App\Repositories\User\Abstracts\UserRepositoryInterface;
use App\Services\User\Abstracts\UserServiceInterface;

class UserService implements UserServiceInterface
{

    public function __construct(
        public UserRepositoryInterface $repository
    )
    {
    }

    public function getUsers() {
        return $this->repository->all();
    }
}
