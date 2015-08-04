<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/08/15
 * Time: 11:32
 */


namespace Dmed\Validators;


use Prettus\Validator\LaravelValidator;

class ClienteValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|max:255',
        'cnpj' => 'required|max:14',

    ];
}