<?php

namespace Backend\Models\Pessoa\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => ['required', 'string', 'max:100'],
            'data_cadastro' => ['required', 'date'],
            'email' => ['required', 'string', 'max:100'],
            'senha' => ['required', 'string', 'max:50'],
            'fone' => ['required', 'string', 'max:20'],
            'tipo_de_pessoa' => ['required', 'string', 'max:50'],
        ];
    }
}