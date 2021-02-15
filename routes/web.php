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
	return view('welcome');
});


Route::get('/hellow', function () {
	return view('hellow');
});

Route::get('/contact', function () {
	return view('contact');
});

Route::get('/about', function () {
	return view('about');
});


//=================================================

Route::get('/sum', function () {

	$sum = 10 + 20;
	echo $sum;
});



Route::get('/student/{name}/{age}', function ($name, $age) {
	echo "Welcome $name and age $age";
});


Route::get('/student/{name?}/{age?}', function ($name="Mehrab", $age="24") {
	echo "Welcome $name and age $age";
});



Route::get('/student/{name}/{age}', function ($name, $age) {
	$name = strtoupper($name);
	echo "Welcome $name and age $age";
});


// add Hellow page

Route::get('/all', function(){
	$data = DB::select("SELECT * FROM district");
	return view('hellow', array("mydata"=>$data));
});


// From Controller

Route::get('/home', 'homeController@index');

Route::get('/welcome', 'homeController@welcome');



// New Templete

Route::get('/', function(){
	return view('pages.home');
});

Route::get('/about', function(){
	return view('pages.about');
});



// 14/02/21

Route::get('/students/create', 'StudentsController@create');
Route::post('/students/store', 'StudentsController@store');
Route::get('/students/', 'StudentsController@index');
Route::get('/students/delete/{id}', 'StudentsController@destroy');
Route::get('/students/edit/{id}', 'StudentsController@edit');
Route::post('/students/Update/{id}', 'StudentsController@update');