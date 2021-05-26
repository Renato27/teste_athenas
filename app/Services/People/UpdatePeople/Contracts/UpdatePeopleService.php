<?php

namespace App\Services\People\UpdatePeople\Contracts;

use App\Models\People;
use App\Repositories\Contracts\PeopleRepository;

interface UpdatePeopleService
{
    /**
     * Seta a model de People.
     *
     * @param People|null
     * @return UpdatePeopleService
     */
    public function setPeople(?People $People = null): UpdatePeopleService;

    /**
     * Seta os dados para People.
     *
     * @param array $dados
     * @return UpdatePeopleService;
     */
    public function setDados(array $dados): UpdatePeopleService;

    /**
     * Seta o repositório de PeopleRepository.
     *
     * @param PeopleRepository $PeopleRepository
     * @return UpdatePeopleService
     */
    public function setPeopleRepository(PeopleRepository $PeopleRepository): UpdatePeopleService;

    /**
     * Processa os dados
     *
     * @return People|null
     */
    public function handle(): ?People;
}
