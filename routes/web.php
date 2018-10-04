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
    //return "Bienvenidos Vista Principal";
    return view('logeo');
    //echo "<a href=".route('contac').">Contactos</a>";
});

Route::get('/',['as'=>'principal',function(){
	return view('logeo');
}]);
/*
Route::post('inicio',function(){
	//return "hola";
	return view('inicio');
});
*/
Route::get('Transferencias',['as'=>'viewTransferencias',function(){
	return view('transferencias/transfer_pendientes');
}]);

Route::get('Depositos',['as'=>'viewDepositos',function(){
	return view('depositos/deposito_pendiente');
}]);

Route::get('Remesas',['as'=>'viewRemesas',function(){
	return view('remesas/remesasFueraRango');
}]);

Route::post('datos','PagesController@validaLogeo');

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
