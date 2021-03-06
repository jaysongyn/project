<?php

namespace Dmed\Repositories;

use Dmed\Presenters\EmpresaPresenter;
use Dmed\Validators\EmpresaValidator;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Dmed\Entities\Empresa;

/**
 * Class EmpresaRepositoryEloquent
 * @package namespace Dmed\Repositories;
 */
class EmpresaRepositoryEloquent extends BaseRepository implements EmpresaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Empresa::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }
}