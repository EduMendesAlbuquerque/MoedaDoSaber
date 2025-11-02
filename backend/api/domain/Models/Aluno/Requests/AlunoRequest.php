<?php

namespace Backend\Models\Aluno\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'aluno' => ['required', 'string', 'max:255'],
            'matricula' => ['required', 'integer'],
            'curso' => ['required', 'string', 'max:255'],
            'statusCurso' => ['required', 'string', 'max:255'],
        ];
    }
}