<?php

namespace App\Providers;

use App\Services\User\Abstracts\UserServiceInterface;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class ServiceServiceProvider extends ServiceProvider
{
    public array $singletons = [
        UserServiceInterface::class => UserService::class,
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
