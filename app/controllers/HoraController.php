<?php

class HoraController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /hora
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Hora::paginate(7);
		return View::make('hora.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /hora/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /hora
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	public function show($id)
	{
		$data = Hora::find($id);
		return View::make('hora.show', compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /hora/{id}/edit
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
	 * PUT /hora/{id}
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
	 * DELETE /hora/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}