<?php

namespace Backend\Models\Pessoa;

use App\Http\Controllers\Controller;
use Backend\Models\Pessoa\Actions\CreateAction;
use Backend\Models\Pessoa\Actions\IndexAction;
use Backend\Models\Pessoa\Requests\PessoaRequest;
use Backend\Models\Pessoa\Resource\PessoaResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PessoaController extends Controller
{
    public function index(IndexAction $action): JsonResource
    {
        $rows = $action->handle();

        return PessoaResource::collection($rows);
    }

    public function store(PessoaRequest $request, CreateAction $action): JsonResource
    {
        $row = $action->handle($request->validated());

        $row->load('resultados');

        return new PessoaResource($row);
    }

    public function show(int $id): JsonResource
    {
        $pessoa = Pessoa::with('resultados')->findOrFail($id);

        return new PessoaResource($pessoa);
    }
}