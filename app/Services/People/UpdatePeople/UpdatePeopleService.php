<?php

namespace App\Services\People\UpdatePeople;

use App\Models\People;
use App\Services\People\UpdatePeople\Abstracts\UpdatePeopleServiceAbstract;
use Illuminate\Support\Facades\DB;

class UpdatePeopleService extends UpdatePeopleServiceAbstract
{
    /**
     * Processa os dados
     *
     * @return People|null
     */
    public function handle(): ?People
    {
        return DB::transaction(function () {
            return $this->UpdatePeople();
        });
    }
}
