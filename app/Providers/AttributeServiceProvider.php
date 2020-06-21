<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Attribute\AttributeRepository;
use App\Repositories\Attribute\AttributeRepositoryInterface;

class AttributeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AttributeRepositoryInterface::class, AttributeRepository::class);
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
