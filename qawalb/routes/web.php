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
// Route::get('/home', function () {
//     return view('qawalb.index');
// });
// Route::get('/', function () {
//     return view('qawalb.index');
// });
Route::get('/','TempletController@index');
Route::get('/create','TempletController@createTemplet');
Route::post('/','TempletController@store');
Route::get('/{templet}','TempletController@show');

Route::get('/ahmad','AutherController@profile');


//-----templets------
// Route::get('/create','TempletController@createTemplet');
//Route::post('/shop','TempletController@store');
// Route::get('/{templet}','TempletController@show');


//-----templets------

// Route::get('/details', function () {
//     return view('qawalb.product-details');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
