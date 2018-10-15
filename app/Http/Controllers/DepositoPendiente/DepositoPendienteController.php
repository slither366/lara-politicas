<?php

namespace App\Http\Controllers\DepositoPendiente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\DepositoPendiente;

class DepositoPendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depPendiente = DepositoPendiente::all();   
        //return $usuarios;
        return response()->json(['data' => $depPendiente],200);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'//password_confirmation = ''
        ];*/

        //$this->validate($request, $rules);

        $campos = $request->all();    

        $depNew = DepositoPendiente::create($campos);
        return response()->json(['data' => $depNew], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depPend = DepositoPendiente::findOrFail($id);

        return response()->json(['data' => $depPend],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depPend = DepositoPendiente::findOrFail($id);

        $depPend->delete();

        return response()->json(['data' => $depPend], 200);
    }

    /**
     * Elimina Todo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroyall()
    {
        //DB::table('depositoPendiente')->delete();
        //DB::table('depositoPendiente')->truncate();
        //$depPend = DepositoPendiente::all();

        DepositoPendiente::truncate();

        return "Exito!";
    }    


}
