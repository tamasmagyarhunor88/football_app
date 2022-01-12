<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\LeagueRepositoryInterface;
use App\Repositories\LeagueRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LeagueRepositoryInterface::class, LeagueRepository::class);
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
