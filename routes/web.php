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

Route::get('/', function () {
    return view('index');
});
Route::get('/form','FormController@index');

Route::post('/formdata', function()
{
	//$formdata = Input::all();
	//print_r($formdata);
	var_dump($_POST);
});