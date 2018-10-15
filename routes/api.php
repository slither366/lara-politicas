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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Route::get('foo/bar', 'FooController@bar');

Route::delete('deleteall',['as'=>'depositoPendiente.deleteall','uses'=>'DepositoPendiente\DepositoPendienteController@destroyall']);

Route::resource('usuarios','User\UserController',['except'=>['create','edit']]);

Route::resource('depositoPendiente','DepositoPendiente\DepositoPendienteController',['except'=>['create','edit']]);
