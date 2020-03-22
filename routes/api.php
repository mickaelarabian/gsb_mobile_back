<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/users/login', 'AuthController@login');

Route::get('services/personnel/{id}', 'ServiceController@getAllFromPersonnel');

Route::get('/services/{id}', 'ServiceController@getService');

Route::post('/depenses/create', 'DepenseController@create');

Route::post('/demandes/create', 'DemandeController@create');