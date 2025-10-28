<?php

namespace Backend\Models\Atividade;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Atividade extends Model
{
    protected $table = 'atividade';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'descricao',
    ];

    public function resultados(): HasMany
    {
        return $this->hasMany(AtividadeResultado::class, 'id_atividade', 'id');
    }
}
