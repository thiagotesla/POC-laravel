<?php

namespace App\Providers;

use App\Repositories\BookRepository;
use App\Repositories\UserRepository;
use App\RepositoryInterfaces\IBookRepository;
use App\RepositoryInterfaces\IUserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IBookRepository::class, BookRepository::class);
        $this->app->bind(IUserRepository::class, UserRepository::class);
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
