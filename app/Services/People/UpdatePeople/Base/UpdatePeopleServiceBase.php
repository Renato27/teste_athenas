<?php

namespace App\Services\People\UpdatePeople\Base;

use App\Services\People\UpdatePeople\Contracts\UpdatePeopleService;
use App\Models\People;
use App\Repositories\Contracts\PeopleRepository;

abstract class UpdatePeopleServiceBase implements UpdatePeopleService
{
    /**
     * Model de People.
     *
     * @var People|null
     */
    protected ?People $People;

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
     * Seta a model de People.
     *
     * @param People|null
     * @return UpdatePeopleService
     */
    public function setPeople(?People $People = null): UpdatePeopleService
    {
        $this->People = $People;
        return $this;
    }

    /**
     * Seta os dados para People.
     *
     * @param array $dados
     * @return UpdatePeopleService;
     */
    public function setDados(array $dados): UpdatePeopleService
    {
        $this->dados = $dados;
        return $this;
    }

    /**
     * Seta o repositório de PeopleRepository.
     *
     * @param PeopleRepository $PeopleRepository
     * @return UpdatePeopleService
     */
    public function setPeopleRepository(PeopleRepository $PeopleRepository): UpdatePeopleService
    {
        $this->PeopleRepository = $PeopleRepository;
        return $this;
    }
}
