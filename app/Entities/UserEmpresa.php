<?php

namespace Dmed\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class UserEmpresa extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'user_id',
        'empresa_id'
    ];

}
