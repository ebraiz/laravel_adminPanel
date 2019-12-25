<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ads;

class Ads_management extends Controller {

	public function index()
	{
		$ads = Ads::all();
		return view('ads_management', ['am' => $ads]);
	}
}