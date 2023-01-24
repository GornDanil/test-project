<?php

namespace App\Http\Controllers;

use App\Services\User\Abstracts\UserServiceInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function __construct(
        public UserServiceInterface $service
    )
    {
    }

    public function index() {

        return view('welcome', [
            'users' => $this->service->getUsers(),
        ]);
    }
}
