<?php

namespace App\Services\People\CreatePeople\Contracts;

use App\Models\People;
use App\Repositories\Contracts\PeopleRepository;

interface CreatePeopleService
{
    /**
     * Seta os dados para People.
     *
     * @param array $dados
     * @return CreatePeopleService;
     */
    public function setDados(array $dados): CreatePeopleService;

    /**
     * Seta o repositório de PeopleRepository.
     *
     * @param PeopleRepository $PeopleRepository
     * @return CreatePeopleService
     */
    public function setPeopleRepository(PeopleRepository $PeopleRepository): CreatePeopleService;

    /**
     * Processa os dados
     *
     * @return People|null
     */
    public function handle(): ?People;
}
