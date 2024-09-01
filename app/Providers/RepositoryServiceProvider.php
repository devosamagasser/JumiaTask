<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
        
        $this->app->bind(
            'App\Interfaces\UsersInterface',
            'App\Repositories\UsersRepository',
        );

$this->app->bind(
            'App\Interfaces\CustomersInterface',
            'App\Repositories\CustomersRepository',
        );

//
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
