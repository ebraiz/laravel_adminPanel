<?php

namespace App\Http\Controllers;

class User_management extends Controller {

	public function __construct()
	{
		//parent::__construct();
		//if( ! $this->session->userdata('user_id'))
		//	return redirect('login');
	}

	public function index()
	{
		return view('user_management');
	}
}