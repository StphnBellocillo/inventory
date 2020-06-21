<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Profile\ProfileRepository;
use App\Repositories\Profile\ProfileRepositoryInterface;

class ProfileServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
                     public function register()
    {
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
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
