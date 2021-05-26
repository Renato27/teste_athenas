<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CategoryRepository
{
    /**
     * Retorna Category baseado no ID.
     *
     * @param integer $id
     * @return Model|null
     */
    public function getCategory(int $id): ?Model;

    /**
     * Retorna uma coleção de Categorys.
     *
     * @param integer $id
     * @param integer $segundo_recurso
     * @return Collection|null
     */
    public function getCategorys(int $id): ?Collection;

    /**
     * Cria um novo Category
     *
     * @param array $detalhes
     * @return Model|null
     */
    public function createCategory(array $detalhes): ?Model;

    /**
     * Atualiza um Category
     *
     * @param int $id
     * @param array $detalhes
     * @return Model|null
     */
    public function updateCategory(int $id, array $detalhes): ?Model;

    /**
     * Deleta um Category
     *
     * @param int $id
     * @param array $detalhes
     * @return bool
     */
    public function deleteCategory(int $id): bool;
}
