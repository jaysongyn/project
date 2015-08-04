<?php

namespace Dmed\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Empresa extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'cnpj'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

}
