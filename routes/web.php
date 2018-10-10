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
/*
Route::get('/', function () {
    //return "Bienvenidos Vista Principal";
    return view('welcome');
    //echo "<a href=".route('contac').">Contactos</a>";
});
*/
        // Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',['as'=>'viewLogeo', function(){
	return view('layouts/app');
}]);

//---------------------------------------------------------

Route::get('postDepositosPendientes',['as'=>'depositos.index','uses'=>'DeposPendController@index']);

Route::get('postDepositosPendientes/create',['as'=>'depositospendientes.create','uses'=>'DeposPendController@create']);

Route::post('postDepositosPendientes',['as'=>'depositos.store','uses'=>'DeposPendController@store']);

//---------------------------------------------------------
Route::get('Principal', ['as'=>'viewPrincipal',function(){
	return view('principal');
	//return "Principal";
}]);

Route::get('Transferencias',['as'=>'viewTransferencias',function(){
	//return view('transferencias/transfer_pendientes');
	return "Transferencias";
}]);

Route::get('Depositos',['as'=>'viewDepositos',function(){
	//return view('depositos/deposito_pendiente');
	return "Depositos";
}]);

Route::get('Remesas',['as'=>'viewRemesas',function(){
	//return view('remesas/remesasFueraRango');
	return "Remesas";
}]);

/*
Route::post('inicio',function(){
	//return "hola";
	return view('inicio');
});
*/
/*


Route::post('datos','PagesController@validaLogeo');

Route::get('usuarios/create',['as'=>'usuarios.create','uses'=>'UsuariosController@create']);*/

//Route::get()
/*
Route::get('mensajes/{nombre?}', function($nombre="invitado"){
	//return "Hola $nombre";
	return view('mensajes', compact('nombre'));

})->where('nombre', "[A-Za-z]+");

Route::get('contactos', ['as' => 'contac', function(){
	//return "Sección Contactos";
	echo "<a href=".route('home').">back.</a>";
}]);
*/
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
