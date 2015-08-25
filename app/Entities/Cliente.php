<?php

namespace Dmed\Entities;


use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Cliente extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'nome',
        'cnpj'
    ];


    public function usuarios()
    {
        return $this->hasMany(User::class);
    }

    public  function empresas()
    {
        return $this->hasMany(Empresa::class);
    }


}
