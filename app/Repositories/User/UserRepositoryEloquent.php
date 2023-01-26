<?php

namespace App\Repositories\User;

use App\Entities\Auth\User;
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
     * Checking the existence of the user
     *
     * @return boolean
     */
    public function checkUser(object $data): bool{
        $userByName = $this->model->newQuery()->where('name', '=', $data->name)->first();
        $userByEmail = $this->model->newQuery()->where('email', '=', $data->email)->first();
        return isset($userByName) || isset($userByEmail);
    }

    public function getUserByName(string $name){
        return $this->model->newQuery()
            ->where('name', $name)->first();
    }



}
