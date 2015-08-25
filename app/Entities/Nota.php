<?php

namespace Dmed\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Nota extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'numero',
        'data_emissao',
        'valor',
        'discriminacao',
        'cpf_tomador',
        'nome_tomador',
        'cpf_dependente',
        'nome_dependente',
        'data_nasc_dependente'
    ];

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

}
