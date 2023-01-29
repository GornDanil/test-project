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
        $error = $this->service->registration(RegistrationData::create($request->validated()));
        if (isset($error)){
            return view('registration', ['error' => $error]);
        }
        return redirect()->route('home');
    }

    public function login(LoginRequest $request){
        $error = $this->service->login(LoginData::create($request->validated()));
        if (isset($error)){
            return view('login', ['error' => $error]);
        }
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

}
