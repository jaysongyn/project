<?php

namespace Dmed\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Dmed\Entities\Nota;

/**
 * Class NotasRepositoryEloquent
 * @package namespace Dmed\Repositories;
 */
class NotaRepositoryEloquent extends BaseRepository implements NotaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Nota::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}