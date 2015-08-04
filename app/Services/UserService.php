<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/08/15
 * Time: 19:32
 */

namespace Dmed\Services;


use Dmed\Repositories\UserRepository;

class UserService
{

    private $repository;

    public function __construct(UserRepository $repository)
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

            return $this->repository->with($with)->find($id);


        }catch (ModelNotFoundException $e){
            return [
                'error' => true,
                'message' => 'Cliente nao cadastrado id:'.$id
            ];
        }
    }

    public function hasEmpresa($data)
    {
        $user = $this->repository->find($data['user_id']);

        if(count($user->empresas->find($data['empresa_id'])))
        {
            return $user;
        }
        return false;
    }

    public function removeEmpresa($id,$empresaId)
    {
        try{

            $data = [
                'user_id' => $id,
                'empresa_id' => $empresaId
            ];
            $user = $this->hasEmpresa($data);

            if($user){

                $user->empresas()->detach($data['empresa_id']);

            }else{
                return [
                    'error' => true,
                    'message' => 'No data found'
                ];
            }

            return $user;

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function addEmpresa($data)
    {
        try{
            if($this->hasEmpresa($data))
            {
                return [
                    'error' => true,
                    'message' => 'You are already manager this companyr'
                ];
            }
            $user = $this->repository->find($data['user_id']);
            $user->empresas()->attach($data['empresa_id']);
            return $user;

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }



}