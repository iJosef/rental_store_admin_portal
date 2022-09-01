<?php

namespace App\Providers;

use App\Repositories\ItemRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\RentedItemRepository;
use App\Repositories\ItemRepositoryInterface;
use App\Repositories\RentedItemRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(ItemRepositoryInterface::class, ItemRepository::class);
        $this->app->bind(RentedItemRepositoryInterface::class, RentedItemRepository::class);
    }
}
