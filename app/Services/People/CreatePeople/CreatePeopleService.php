<?php

namespace App\Services\People\CreatePeople;

use App\Models\People;
use App\Services\People\CreatePeople\Abstracts\CreatePeopleServiceAbstract;
use Illuminate\Support\Facades\DB;

class CreatePeopleService extends CreatePeopleServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return People|null
     */
    public function handle(): ?People
    {
        return DB::transaction(function () {
            return $this->CreatePeople();
        });
    }
}
