<?php

namespace Backend\Models\Pessoa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PessoaResultado extends Model
{
    protected $table = 'pessoa';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nome',
        'data_cadastro',
        'email',
        'senha',
        'fone',
        'tipo_de_pessoa',
    ];
}