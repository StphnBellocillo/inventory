<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Group\GroupRepository;
use App\Repositories\Group\GroupRepositoryInterface;

class GroupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(GroupRepositoryInterface::class, GroupRepository::class);
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
