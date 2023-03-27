<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Trip\TripInterface;
use App\Repositories\Trip\TripRepository;
use App\Repositories\Customer\CustomerInterface;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Group\GroupInterface;
use App\Repositories\Group\GroupRepository;


class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(TripInterface::class, TripRepository::class);
        $this->app->bind(CustomerInterface::class, CustomerRepository::class);
        $this->app->bind(GroupInterface::class, GroupRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
