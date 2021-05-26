<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Contracts\PeopleRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class PeopleRepositoryImplementation implements PeopleRepository
{
    use BaseEloquentRepository;

    /**
     * Retorna People baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getPeople(int $id): ?Model
    {
        return $this->find($id);
    }

    /**
     * Retorna uma coleção de Peoples.
     *
     * @param integer $id
     * @return Collection|null
     */
    public function getPeoples(int $people_id): ?LengthAwarePaginator
    {
        $people = $this->find($people_id);

        switch ($people->category_id) {
            case Category::ADMIN:
                return $this->paginate(5);
                break;
            case Category::GERENTE:
                return $this->where(['category_id' => Category::NORMAL])->paginate(5);
                break;

        }
    }

    /**
     * Cria um novo People
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createPeople(array $detalhes): ?Model
    {
        return $this->create($detalhes);
    }

    /**
     * Atualiza um People
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updatePeople(int $id, array $detalhes): ?Model
    {
        return $this->update($id, $detalhes);
    }

    /**
     * Deleta um People
     *
     * @param int $id
     * @param array $detalhes
     * @return bool
     */
    public function deletePeople(int $id): bool
    {
        return $this->delete($id);
    }
}
