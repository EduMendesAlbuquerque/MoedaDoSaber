<?php

namespace Backend\Models\Aluno;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    protected $table = 'aluno';

    public $timestamps = false;

    protected $fillable = [
        'aluno',
        'matricula',
        'curso',
        'statusCurso',
    ];

    public function resultados(): HasMany
    {
        return $this->hasMany(Aluno::class, 'id', 'id');
    }
}
