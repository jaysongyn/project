<?php

namespace Dmed\Http\Controllers;

use Dmed\Services\NotaService;
use Illuminate\Http\Request;

use Dmed\Http\Requests;


class NotaController extends Controller
{
    private $service;

    /**
     * NotaController constructor.
     */
    public function __construct(NotaService $service)
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
        return $this->service->index(['empresa']);
    }

    /**
     * Show the form for creating a new resources.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resources in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($numero)
    {

        return $this->service->show($numero,['empresa']);
    }

    /**
     * Show the form for editing the specified resources.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
