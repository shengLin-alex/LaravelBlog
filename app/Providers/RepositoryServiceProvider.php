<?php

namespace App\Providers;

use App\Repositories\PostRepository;
use App\Repositories\PostRepositoryImpl;
use App\Repositories\ProductRepository;
use App\Repositories\ProductRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            PostRepository::class,
            PostRepositoryImpl::class
        );

        $this->app->bind(
            ProductRepository::class,
            ProductRepositoryImpl::class
        );
    }
}
