<?php

namespace Backend\Models\Aluno\Actions;

use Backend\Models\Aluno\Aluno;
use Illuminate\Support\Collection;

final readonly class IndexAction
{
    /**
     * @return Collection<int, Aluno>
     */
    public function handle(): Collection
    {
        return Aluno::query()
            ->with('resultados')
            ->get();
    }
}