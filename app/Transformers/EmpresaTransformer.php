<?php

namespace Dmed\Transformers;

use League\Fractal\TransformerAbstract;
use Dmed\Entities\Empresa;

/**
 * Class EmpresaTransformer
 * @package namespace Dmed\Transformers;
 */
class EmpresaTransformer extends TransformerAbstract
{

    /**
     * Transform the \Empresa entity
     * @param \Empresa $model
     *
     * @return array
     */
    public function transform(Empresa $model) {
        return [
            'name' => $model->name,
            'cnpj' => $model->cnpj,
        ];
    }
}