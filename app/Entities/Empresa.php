<?php

namespace Dmed\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Empresa extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'cliente_id',
        'name',
        'cnpj'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function notas()
    {
        return $this->hasMany(Nota::class);
    }

}
