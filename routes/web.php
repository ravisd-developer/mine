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
    return view('sections.home');
});
Route::get('/projects', function(){
    return view('sections.projects');
});
Route::get('/about', function(){
    return view('sections.about');
});

Route::get('/url', function(){
    return view('pro.url');
});
Route::get('r/{un}', 'UserController@r');

Route::get('/controll', 'UserController@datas');
Route::get('/insert', 'UserController@insert');
Route::get('/ct', 'UserController@createTable');
Route::get('/register', 'clientsController@registerCompany');

Route::get('/clients', function(){
    return view('clients.main');
});
Route::post('/home', 'clientsController@home');
Route::get('/client_home{data}', function(){
    return view('clients.home');
});