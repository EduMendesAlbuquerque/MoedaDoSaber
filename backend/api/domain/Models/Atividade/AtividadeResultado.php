<?php

namespace Backend\Models\Atividade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AtividadeResultado extends Model
{
    protected $table = 'atividade_resultado';

    public $timestamps = false;

    protected $fillable = [
        'id_atividade',
        'nota',
        'observacao',
    ];
    protected $hidden = [
        'id_atividade',
    ];

    protected $casts = [
        'nota' => 'float',
    ];

    public function atividade(): BelongsTo
    {
        return $this->belongsTo(Atividade::class, 'id_atividade', 'id');
    }
}
