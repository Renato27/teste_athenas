<?php

namespace App\Services\People\UpdatePeople\Abstracts;

use App\Models\People;
use App\Services\People\UpdatePeople\Base\UpdatePeopleServiceBase;

abstract class UpdatePeopleServiceAbstract extends UpdatePeopleServiceBase
{
    /**
     * Implementação do código.
     *
     * @return People|null
     */
    protected function UpdatePeople() : ?People
    {
        return $this->PeopleRepository->updatePeople($this->People->id, $this->dados);
    }
}
