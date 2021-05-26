<?php

namespace App\Services\People\CreatePeople\Abstracts;

use App\Models\People;
use App\Services\People\CreatePeople\Base\CreatePeopleServiceBase;

abstract class CreatePeopleServiceAbstract extends CreatePeopleServiceBase
{
    /**
     * Implementação do código.
     *
     * @return People|null
     */
    protected function CreatePeople() : ?People
    {
        return $this->PeopleRepository->createPeople($this->dados);
    }
}
