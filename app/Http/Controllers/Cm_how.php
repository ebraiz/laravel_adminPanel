<?php

namespace App\Http\Controllers;

class Cm_how extends Controller {

	public function __construct()
	{
		//parent::__construct();
		//if( ! $this->session->userdata('user_id'))
		//	return redirect('login');
	}

	public function index()
	{
		return view('cm_how');
	}
}