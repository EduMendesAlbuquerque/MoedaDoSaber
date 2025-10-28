<?php

namespace Backend\Models\Atividade\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AtividadeResource extends JsonResource {
    public function toArray($request): array
    {

        return [
            'id'         => $this->id,
            'titulo'     => $this->titulo,
            'descricao'  => $this->descricao,
            'resultados' => $this->resultados
        ];
    }
}
