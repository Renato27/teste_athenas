<?php

namespace App\Services\People\CreatePeople\Base;

use App\Services\People\CreatePeople\Contracts\CreatePeopleService;
use App\Models\People;
use App\Repositories\Contracts\PeopleRepository;

abstract class CreatePeopleServiceBase implements CreatePeopleService
{
    /**
     * Array de dados.
     *
     * @var array
     */
    protected array $dados;

    /**
     * Repositório de PeopleRepository.
     *
     * @var People
     */
    protected PeopleRepository $PeopleRepository;

    /**
     * Seta os dados para People.
     *
     * @param array $dados
     * @return CreatePeopleService;
     */
    public function setDados(array $dados): CreatePeopleService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de PeopleRepository.
     *
     * @param PeopleRepository $PeopleRepository
     * @return CreatePeopleService
     */
    public function setPeopleRepository(PeopleRepository $PeopleRepository): CreatePeopleService
    {
        $this->PeopleRepository = $PeopleRepository;
        return $this;
    }
}
