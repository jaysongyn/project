<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04/08/15
 * Time: 11:29
 */

namespace Dmed\Services;



use Dmed\Repositories\EmpresaRepository;
use Dmed\Validators\EmpresaValidator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class EmpresaService
{
    private $validator;
    private $repository;

    public function __construct(EmpresaRepository $repository, EmpresaValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function getAll($id, $with = [])
    {
        try{

            return $this->repository->with($with)->findWhere(['cliente_id' => $id]);

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

    public function getEmpresa($id, $with = [])
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

    /**
     * @param array $data
     * @return array
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(array $data)
    {
        try{
           $data['cliente_id'] = 2;

            //$this->validator->with($data)->passesOrFail();

             $empresa = $this->repository->create($data);
            return [
                'sucess' => true,
                'message' => 'Empresa '.$empresa->name.' cadastrada com sucesso!'
            ];

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

    /**
     * @param array $data
     * @param $id
     * @return array
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update($data, $id)
    {
        try{
            //$this->validator->with($data)->passesOrFail();

             $this->repository->update($data, $id);

        }catch (ValidatorException $e){
            return [
                'error' => true,
                'message' => $e->getMessageBag()
            ];
        }
    }

}