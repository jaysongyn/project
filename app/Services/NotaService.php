<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 05/08/15
 * Time: 11:34
 */

namespace Dmed\Services;


use Dmed\Entities\Nota;
use Dmed\Repositories\NotaRepository;

class NotaService
{

    private $repository;

    public function __construct(NotaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($with = [])
    {
        try{
            return  $this->repository->with($with)->all();

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        } catch (FatalErrorException $e){
            return [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }
    }

    public function show($id, $with = [])
    {

        try{

            $notas = $this->repository->with($with)->findWhere(['numero' => $id]);

            if(count($notas)){
                return $notas;
            }

            return [
                'error' => true,
                'message' => 'Nota nao cadastrado id:'.$id
            ];


        }catch (ModelNotFoundException $e){
            return [
                'error' => true,
                'message' => 'Cliente nao cadastrado id:'.$id
            ];
        }
    }


}