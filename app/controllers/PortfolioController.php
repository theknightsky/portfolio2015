<?php

class PortfolioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /portfolio
	 *
	 * @return Response
	 */
	public function index()
	{
		return Portfolio::all();
	}


	/**
	 * Display the specified resource.
	 * GET /portfolio/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Portfolio::findOrFail($id);
	}


}