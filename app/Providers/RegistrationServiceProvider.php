<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Login\RegistrationRepository;
use App\Repositories\Login\RegistrationRepositoryInterface;

class RegistrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RegistrationRepositoryInterface::class, RegistrationRepository::class);
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
