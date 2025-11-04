<?php

namespace Backend\Models\Pessoa\Actions;

use Backend\Models\Pessoa\Pessoa;
use Illuminate\Support\Collection;

final readonly class IndexAction
{
    /**
     * @return Collection<int, Pessoa>
     */
    public function handle(): Collection
    {
        return Pessoa::query()->get();
    }
}