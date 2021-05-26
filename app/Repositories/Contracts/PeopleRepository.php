<?php

namespace App\Repositories\Contracts;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface PeopleRepository
{
    /**
     * Retorna People baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPeople(int $id): ?Model;

    /**
     * Retorna uma coleção de Peoples.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Collection|null
     */
    public function getPeoples(int $people_id): ?LengthAwarePaginator;

    /**
     * Cria um novo People
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPeople(array $detalhes): ?Model;

    /**
     * Atualiza um People
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePeople(int $id, array $detalhes): ?Model;

    /**
     * Deleta um People
     *
     * @param int $id
     * @param array $detalhes
     * @return bool
     */
    public function deletePeople(int $id): bool;
}
