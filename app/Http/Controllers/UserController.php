<?php

namespace App\Http\Controllers;

use App\DTO\LoginData;
use App\DTO\RegistrationData;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Services\User\Abstracts\UserServiceInterface;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(
        public UserServiceInterface $service
    )
    {
    }

    public function registration(RegistrationRequest $request) {
        $data = RegistrationData::create($request->validated());
        return $this->service->registration($data);
    }

    public function login(LoginRequest $request){
        $data = LoginData::create($request->validated());
        return $this->service->login($data);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

}
