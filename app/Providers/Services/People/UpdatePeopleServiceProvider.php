<?php

namespace App\Providers\Services\People;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\PeopleRepository;
use App\Services\People\UpdatePeople\UpdatePeopleService;
use App\Services\People\UpdatePeople\Contracts\UpdatePeopleService as ContractsUpdatePeopleService;

class UpdatePeopleServiceProvider extends ServiceProvider
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
        $service = new UpdatePeopleService();
        $service->setPeopleRepository(app(PeopleRepository::class));

        $this->app->bind(ContractsUpdatePeopleService::class, function() use($service){
            return $service;
        });
    }
}
