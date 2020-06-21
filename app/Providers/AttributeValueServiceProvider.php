<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AttributeValue\AttributeValueRepository;
use App\Repositories\AttributeValue\AttributeValueRepositoryInterface;

class AttributeValueServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AttributeValueRepositoryInterface::class, AttributeValueRepository::class);
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
