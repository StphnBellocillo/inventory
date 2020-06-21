<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;

class OrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
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
