<?php

namespace App\Providers;

use App\Services\ITransactionService;
use App\Services\IOrderService;
use App\Services\TransactionService;
use App\Services\OrderService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

        $this->app->bind(ITransactionService::class, TransactionService::class);
        $this->app->bind(IOrderService::class,OrderService::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
