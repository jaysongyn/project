<?php

namespace Dmed\Http\Controllers;

use Dmed\Services\UserService;
use Illuminate\Http\Request;

use Dmed\Http\Requests;


class UserController extends Controller
{

    public function  __construct(UserService $service)
    {
        return $this->service = $service;
    }
    /**
     * Display a listing of the resources.
     *
     * @return Response
     */
    public function index()
    {
        $id = 2;
        $usuarios =  $this->service->getAll($id,['empresas']);

        return view('dmed.usuario.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resources.
     *
     * @return Response
     */
    public function create()
    {

        return view('dmed.usuario.create');
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
         $usuario = $this->service->store($request->all());

        return view('dmed.usuario.addEmpresa',compact('usuario'));

    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->service->getAll($id,['empresas']);
    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $usuario = $this->service->getUser($id,['empresas']);

        return view('dmed.usuario.edit',compact('usuario'));
    }

    /**
     * Update the specified resources in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request->all(),$id);
        $id = 2;

        $usuarios = $this->service->getAll($id,['empresas']);

        return view('dmed.usuario.index',compact('usuarios'));
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
        return redirect()->route('usuario.index');
    }


    public function addEmpresaCreate($id){

        $usuario = $this->service->getUser($id,['empresas']);

        return view('dmed.usuario.addEmpresa',compact('usuario'));
    }

    public function addEmpresaStore(Request $request)
    {

        $id =  $this->service->addEmpresaStore($request->all());

        $usuario = $this->service->getUser($id,['empresas']);

        return view('dmed.usuario.addEmpresa',compact('usuario'));
    }

    public function removeEmpresa($userId,$empresaId)
    {
        $id = $this->service->removeEmpresa($userId, $empresaId);

        $usuario = $this->service->getUser($id,['empresas']);

        return view('dmed.usuario.addEmpresa',compact('usuario'));

    }
}
