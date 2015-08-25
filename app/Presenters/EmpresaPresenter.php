<?php

namespace Dmed\Presenters;

use Dmed\Transformers\EmpresaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class EmpresaPresenter
 *
 * @package namespace Dmed\Presenters;
 */
class EmpresaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new EmpresaTransformer();
    }
}
