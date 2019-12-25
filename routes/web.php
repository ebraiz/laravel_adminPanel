<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard_users', function () {
	return view('dashboard_users');
});
//Route::get('/dashboard_users', 'Dashboard_users@index');
Route::get('/dashboard_ads', 'Dashboard_ads@index');
Route::get('/user_management', 'User_management@index');

Route::get('/categories_management', 'Categories_management@index');
Route::get('/categories_management/insert', 'Categories_management@insert');

Route::get('/ads_management', 'Ads_management@index');
Route::get('/jmmao_store', 'Jmmao_store@index');
Route::get('/cm_term', 'Cm_term@index');
Route::get('/cm_privacy', 'Cm_privacy@index');
Route::get('/cm_how', 'Cm_how@index');




