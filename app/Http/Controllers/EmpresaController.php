<?php

namespace Dmed\Http\Controllers;

use Dmed\Services\EmpresaService;
use Illuminate\Http\Request;

use Dmed\Http\Requests;


class EmpresaController extends Controller
{

    private $service;

    public function  __construct(EmpresaService $service)
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

        $empresas = $this->service->getAll($id, ['cliente','notas']);

        return view('dmed.empresa.index',compact('empresas'));

    }



    /**
     * Show the form for creating a new resources.
     *
     * @return Response
     */
    public function create()
    {
        return view('dmed.empresa.create');
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $message =  $this->service->store($request->except('_token'));


        return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $empresa = $this->service->getEmpresa($id,['cliente','notas']);

        return view('dmed.empresa.edit',compact('empresa'));
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

        return redirect()->route('empresa.index');
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

        return redirect()->route('empresa.index');
    }
}
