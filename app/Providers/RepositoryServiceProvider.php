<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ProductRepository;
use App\Repository\ProductRepo;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductRepository::class, ProductRepo::class);
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
