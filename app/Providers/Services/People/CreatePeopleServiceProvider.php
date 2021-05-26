<?php

namespace App\Providers\Services\People;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PeopleRepository;
use App\Services\People\CreatePeople\CreatePeopleService;
use App\Services\People\CreatePeople\Contracts\CreatePeopleService as ContractsCreatePeopleService;

class CreatePeopleServiceProvider extends ServiceProvider
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
        $service = new CreatePeopleService();
        $service->setPeopleRepository(app(PeopleRepository::class));

        $this->app->bind(ContractsCreatePeopleService::class, function() use($service){
            return $service;
        });
    }
}
