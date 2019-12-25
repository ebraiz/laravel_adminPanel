<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\jmmao_stores;

class Jmmao_store extends Controller {

	public function index()
	{
		$jmmao_store = jmmao_stores::all();
		return view('jmmao_store', ['js' => $jmmao_store]);
	}
}