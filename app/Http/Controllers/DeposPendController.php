<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeposPendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $varDep = DB::table('depositoPendiente')->get();

        return view('depositos.index', compact('varDep'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //
    public function create()
    {
        return view('depositos.createDeposito');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('depositoPendiente')->insert([
            "cod_local" => $request->input('cod_local'),
            "dia_mes" => $request->input('dia_mes'),
            "fecha_mes" => $request->input('fecha_mes'),
            "num_doc_jef_zona" => $request->input('num_doc_jef_zona'),
            "created_at" => Carbon::now(),
        ]);

        return redirect()->route('depositos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
