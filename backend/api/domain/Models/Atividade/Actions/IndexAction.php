<?php

namespace Backend\Models\Atividade\Actions;

use Backend\Models\Atividade\Atividade;
use Illuminate\Support\Collection;

final readonly class IndexAction
{
    /**
     * @return Collection<int, Atividade>
     */
    public function handle(): Collection
    {
        return Atividade::query()
            ->with('resultados')
            ->get();
    }
}
