<?php

namespace Backend\Models\Atividade;

use App\Http\Controllers\Controller;
use Backend\Models\Atividade\Actions\CreateAction;
use Backend\Models\Atividade\Actions\IndexAction;
use Backend\Models\Atividade\Requests\AtividadeRequest;
use Backend\Models\Atividade\Resources\AtividadeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AtividadeController extends Controller
{
    public function index(IndexAction $action): JsonResource
    {
        $rows = $action->handle();

        return AtividadeResource::collection($rows);
    }

    public function store(AtividadeRequest $request, CreateAction $action): JsonResource
    {
        $row = $action->handle($request->validated());

        $row->load('resultados');

        return new AtividadeResource($row);
    }

    public function show(int $id): JsonResource
    {
        $atividade = Atividade::with('resultados')->findOrFail($id);

        return new AtividadeResource($atividade);
    }
}
