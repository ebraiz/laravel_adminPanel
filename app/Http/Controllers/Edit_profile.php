<?php

namespace App\Http\Controllers;

class Edit_profile extends Controller {

	public function __construct()
	{
		//parent::__construct();
		//if( ! $this->session->userdata('user_id'))
		//	return redirect('login');
	}

	public function index()
	{
		return view('edit_profile');
	}
}