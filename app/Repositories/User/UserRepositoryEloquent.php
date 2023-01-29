<?php

namespace App\Repositories\User;

use App\DTO\RegistrationData;
use App\Models\User;
use App\Repositories\User\Abstracts\UserRepositoryInterface;
use Prettus\Repository\Eloquent\BaseRepository;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories\Auth;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepositoryInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * @inheritDoc
     */
    public function checkUser(RegistrationData $data): bool
    {
        return $this->model->newQuery()
                ->where('name', $data->name)
                ->orWhere('email', $data->email)
                ->exists();
    }

    /**
     * @inheritDoc
     */
    public function getUserByName(string $name): ?object
    {
        return $this->model->newQuery()
            ->where('name', $name)
            ->first();
    }



}
