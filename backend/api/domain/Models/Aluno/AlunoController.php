<?php

namespace Backend\Models\Aluno;

use App\Http\Controllers\Controller;
use Backend\Models\Aluno\Actions\CreateAction;
use Backend\Models\Aluno\Actions\IndexAction;
use Backend\Models\Aluno\Requests\AlunoRequest;
use Backend\Models\Aluno\Resources\AlunoResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AlunoController extends Controller
{
    public function index(IndexAction $action): JsonResource
    {
        $rows = $action->handle();
        return AlunoResource::collection($rows);
    }

    public function store(AlunoRequest $request, CreateAction $action): JsonResource
    {
        $row = $action->handle($request->validated());
        $row->load('resultados');
        return new AlunoResource($row);
    }

    public function show(int $id): JsonResource
    {
        $atividade = Aluno::with('resultados')->findOrFail($id);
        return new AlunoResource($atividade);
    }

    public function update(AlunoRequest $request, int $id): JsonResource
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->validated());
        $aluno->load('resultados');
        return new AlunoResource($aluno);
    }

    public function destroy(int $id): \Illuminate\Http\JsonResponse
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return response()->json([
            'message' => 'Aluno deletado com sucesso.'
        ], 200);
    }
}
