<?php

namespace App\Http\Controllers;

use App\simulacros;
use Illuminate\Http\Request;

class SimulacrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anio = date("Y");
        $simulacros = Simulacros::select("*")->where("Lectivo","=",$anio)->get();
        return compact("simulacros");
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
        $hoy = date("Y-m-d");
        $simulacro = new simulacros();
        $simulacro->Bimestre    = $request->simulacro["bimestre"];
        $simulacro->Numero      = $request->simulacro["numero"];
        $simulacro->Lectivo     = $request->simulacro["lectivo"];
        $simulacro->Fecha       = $request->simulacro["fecha"];
        $simulacro->created_at  = $hoy;
        $simulacro->save();
        return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\simulacros  $simulacros
     * @return \Illuminate\Http\Response
     */
    public function show($bimestre)
    {
        $anio = date("Y");
        $simulacros = Simulacros::all()->where("Lectivo","=",$anio)
        ->where("Bimestre","=",$bimestre);
        return compact("simulacros");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\simulacros  $simulacros
     * @return \Illuminate\Http\Response
     */
    public function edit(simulacros $simulacros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\simulacros  $simulacros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, simulacros $simulacros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\simulacros  $simulacros
     * @return \Illuminate\Http\Response
     */
    public function destroy(simulacros $simulacros)
    {
        //
    }
}
