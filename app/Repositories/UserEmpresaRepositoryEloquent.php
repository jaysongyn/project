<?php

namespace Dmed\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Dmed\Entities\UserEmpresa;

/**
 * Class UserEmpresaRepositoryEloquent
 * @package namespace Dmed\Repositories;
 */
class UserEmpresaRepositoryEloquent extends BaseRepository implements UserEmpresaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserEmpresa::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}