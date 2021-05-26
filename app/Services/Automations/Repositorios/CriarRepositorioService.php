<?php

namespace App\Services\Automations\Repositorios;

use App\Services\Automations\Repositorios\Abstracts\CriarRepositorioServiceAbstract;

class CriarRepositorioService extends CriarRepositorioServiceAbstract
{
    /**
     * Processa a criação de um repositório.
     *
     * @param string $repositorio
     * @return bool
     */
    public function handle(string $repositorio, string $recurso)
    {
        try {
            $this->repository = $repositorio;
            $this->recurso = $recurso;

            $this->verificarSeArquivoExiste(self::CAMINHO_BASE.'app/Repositories/Contracts/'.$repositorio);
            $this->verificarSeArquivoExiste(self::CAMINHO_BASE.'app/Repositories/'.$repositorio.'Implementation');

            $this->criarInterface();
            $this->criarImplementacao();

            if (! is_null($this->recurso)) {
                $comando = '@php artisan make:model '.$this->recurso.' -mf';
                echo shell_exec($comando);
            }
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }
}
