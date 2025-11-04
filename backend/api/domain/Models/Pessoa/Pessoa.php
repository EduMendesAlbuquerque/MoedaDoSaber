<?php

namespace Backend\Models\Pessoa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pessoa extends Model
{
    protected $table = 'Pessoa';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'data_cadastro',
        'email',
        'senha',
        'fone',
        'tipo_de_pessoa',
    ];
}