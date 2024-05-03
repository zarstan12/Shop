<?php

namespace App\Providers;

use App\Repositories\Contracts\Users\UserRepositoryInterface;
use App\Repositories\EloquentUserRepository;
use App\Services\Contracts\ValidateAgeServiceInterface;
use App\Services\ValidateAgeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        //Repositories
        $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);



        //UseCases




        //Services

        $this->app->bind(ValidateAgeServiceInterface::class, ValidateAgeService::class);



    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
