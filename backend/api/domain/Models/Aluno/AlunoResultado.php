<?php

namespace Backend\Models\Aluno;

use Illuminate\Database\Eloquent\Model;

class AlunoResultado extends Model
{
    protected $table = 'aluno';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'aluno',
        'matricula',
        'curso',
        'statusCurso',
    ];
    protected $hidden = [
        'id',
    ];

    protected $casts = [
        'nota' => 'float',
    ];
}