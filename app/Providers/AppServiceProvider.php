<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\ComplainRepositoryInterface;
use App\Repositories\ComplainRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(ComplainRepositoryInterface::class, ComplainRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
