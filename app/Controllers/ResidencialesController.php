<?php

namespace App\Controllers;
use App\Models\Residencial;

class ResidencialesController extends BaseController {

	public function index($request, $response) {
		return $response->withJson(Residencial::all(), 200);
	}

	public function show($request, $response, $id) {
		return $response->withJson(Residencial::find($id), 200);
	}
}