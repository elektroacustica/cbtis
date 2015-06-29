<?php

class GrupoController extends \BaseController {

	public function index($id)
	{
		$data = Carrera::find($id)->grupo;
		return View::make('grupo.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /grupo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /grupo
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
		$data = Grupo::find($id);
		return View::make('grupo.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /grupo/{id}/edit
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
	 * PUT /grupo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /grupo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}