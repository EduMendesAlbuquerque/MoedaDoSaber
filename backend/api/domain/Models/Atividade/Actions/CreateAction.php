<?php

namespace Backend\Models\Atividade\Actions;

use Backend\Models\Atividade\Atividade;

final readonly class CreateAction
{
    public function handle(array $data): Atividade
    {
        return Atividade::create($data);
    }
}
