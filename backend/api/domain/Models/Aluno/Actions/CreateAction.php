<?php

namespace Backend\Models\Aluno\Actions;

use Backend\Models\Aluno\Aluno;

final readonly class CreateAction
{
    public function handle(array $data): Aluno
    {
        return Aluno::create($data);
    }
}