<?php

namespace Backend\Models\Atividade\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AtividadeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:100'],
            'descricao' => ['required', 'string', 'max:255'],
        ];
    }
}
