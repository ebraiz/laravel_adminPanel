<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categories;

class Categories_management extends Controller {
	
	public function index()
	{
		$categories = Categories::all();
		return view('categories_management', ['cm' => $categories]);
	}

	public function insert()
	{
		/*	$input = Input::all();
			$categories = new Categories($input);
			$categories->save();*/

			$categories = new Categories([
			'category_id'=>'17',
			'category_name'=>'Category 17',
			'user_id'=>'1',
			'image_path'=>'www.twitter.com'
		]);
		$categories->save();

		$categories = Categories::all();
		return view('categories_management', ['cm' => $categories]);
	}
}