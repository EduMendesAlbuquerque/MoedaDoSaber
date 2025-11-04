<?php

namespace Backend\Models\Pessoa\Resource;

use Illuminate\Http\Resources\Json\JsonResource;

class PessoaResource extends JsonResource {
    public function toArray($request): array
    {

        return [
            'id'         => $this->id,
            'nome'     => $this->nome,
            'data_cadastro'  => $this->data_cadastro,
            'email' => $this->email,
            'senha'  => $this->senha,
            'fone' => $this->fone,
            'tipo_de_pessoa'  => $this->tipo_de_pessoa
        ];
    }
}