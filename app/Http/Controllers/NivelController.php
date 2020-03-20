<?php

namespace App\Http\Controllers;

use App\nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = nivel::all();
        return compact('niveles');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivel = new Nivel();
        $nivel->Nivel = strtoupper($request->nivel['nivel']);
        $nivel->save();
        return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(nivel $nivel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Nivel::where('ID',$request->nivel['id'])->update(['Nivel' => $request->nivel['nivel']]);
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Nivel::where('ID',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
