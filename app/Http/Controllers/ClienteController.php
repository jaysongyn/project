<?php

namespace Dmed\Http\Controllers;

use Dmed\Services\ClienteService;
use Illuminate\Http\Request;

use Dmed\Http\Requests;



class ClienteController extends Controller
{
    private $service;

    /**
     * @param ClienteService $service
     */
    public function  __construct(ClienteService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resources.
     *
     * @return Response
     */
    public function index()
    {
        return  $this->service->index(['usuarios','empresas']);
    }

    /**
     * Show the form for creating a new resources.
     *
     * @return Response
     */
    public function create()
    {
        echo "create";
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
       return $this->service->store($request);
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->service->show($id,['usuarios','empresas']);
    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        echo "edit";
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
        return $this->service->update($request, $id);
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}
