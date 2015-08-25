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

    public function getAll($id,$with = [])
    {
        try{
            return  $this->repository->with($with)->findWhere(['cliente_id' => $id]);

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

    public function getUser($id, $with = [])
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

    public function store(array $data)
    {
        try{
            $data['cliente_id'] = 2;

            //$this->validator->with($data)->passesOrFail();

           return $this->repository->create($data);

            return [
                'sucess' => true,
                'message' => 'Usuário '.$user->name.' cadastrada com sucesso!'
            ];

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function update($data,$id)
    {
        try{
            $this->repository->update($data, $id);


        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
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

                return $user->id;

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

    public function addEmpresaStore($data)
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
            return $user->id;

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    public function destroy($id)
    {
        try{

            $this->repository->find($id)->delete();

            return ['deleted' => 'true'];

        }catch (ModelNotFoundException $e){
            return [
                'error' => true,
                'message' => 'No data found for id:'.$id
            ];
        }catch (QueryException $e){
            return [
                'error' => true,
                'message' => 'You cannot delete this data, there is register related!'
            ];
        }
    }



}