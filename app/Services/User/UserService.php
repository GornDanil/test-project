<?php

namespace App\Services\User;
use App\Models\User;
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

    public function registration(object $data) {

        if(Auth::user()){
            return view('registration', ['error'=>'Вы авторизованы, выйдите из аккаунта']);
        }

        if($this->repository->checkUser($data)){
            return view('registration', ['error'=>'Такой пользователь уже существует']);
        }
        $user = new User();
        $createdUser = $user->create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password)
        ]);

        Auth::login($createdUser);

        return redirect()->route('home');

    }

    public function login(object $data){
        if (Auth::user()){
            return view('login', ['error'=>'Вы уже авторизованы']);
        }

        $user = $this->repository->getUserByName($data->name);

        if (isset($user)){
            Auth::loginUsingId($user->id);
            return redirect()->route('home');
        }
        return view('login', ['error'=>'Пользователь не найден']);
    }
}
