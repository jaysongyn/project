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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return $this->service->index(['empresas']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->service->show($id,['empresas']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->service->destroy($id);
    }

    public function removeEmpresa($id, $empresaId)
    {
        return $this->service->removeEmpresa($id,$empresaId);
    }

    public function addEmpresa($id, $empresaId)
    {
        $data = ['user_id'=>$id,'empresa_id' => $empresaId ];

        return $this->service->addEmpresa($data);
    }
}
