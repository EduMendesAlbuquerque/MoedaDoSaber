<?php

namespace Backend\Models\Pessoa\Actions;

use Backend\Models\Pessoa\Pessoa;

final readonly class CreateAction
{
    public function handle(array $data): Pessoa
    {
        return Pessoa::create($data);
    }
}