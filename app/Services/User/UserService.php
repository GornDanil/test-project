<?php

namespace App\Services\User;
use App\DTO\LoginData;
use App\DTO\RegistrationData;
use App\Repositories\User\Abstracts\UserRepositoryInterface;
use App\Services\User\Abstracts\UserServiceInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * @inheritDoc
     */
    public function registration(RegistrationData $data): ?string {
        if(Auth::user()){
            return 'Вы авторизованы, выйдите из аккаунта';
        }
        if($this->repository->checkUser($data)){
            return 'Такой пользователь уже существует';
        }
        $user = $this->repository->create($data->toArray());
        Auth::login($user);
        return null;

    }
    /**
     * @inheritDoc
     */
    public function login(LoginData $data): ?string{
        if (Auth::user()){
            return 'Вы авторизованы, выйдите из аккаунта';
        }

        $user = $this->repository->getUserByName($data->name);

        if (isset($user)){
            if(Hash::check($data->password, $user->password)){
                Auth::loginUsingId($user->id);
                return null;
            }else{
                return 'Неверный пароль';
            }
        }
        return 'Пользователь не найден';
    }
}
