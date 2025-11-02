<?php

namespace Backend\Models\Aluno\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource {
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'aluno' => $this->aluno,
            'matricula' => $this->matricula,
            'curso' => $this->curso,
            'statusCurso' => $this->statusCurso,
        ];
    }
}
