<?php

namespace App\Http\Controllers;

use App\grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grados = \DB::table('grado')                                   
        ->join('nivel','grado.idNivel','=','nivel.ID')
        ->select('grado.id','grado.grado','grado.seccion','nivel.Nivel')
        ->orderBy('nivel.Nivel','asc')->orderBy('grado.grado','asc')->orderBy('grado.seccion','asc')                              
        ->get();
        return compact('grados');   
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
        $grado = new Grado();
        $hoy   = date("Y-m-d");
        $grado->grado   = $request->grado['grado'];
        $grado->seccion = $request->grado['seccion'];         
        $grado->idNivel = $request->grado['nivel'];
        $grado->created_at = $hoy;         
        $grado->save();
        return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show($nivel)
    {
        $grados = Grado::select("grado")->distinct()->where('idNivel', '=', $nivel)->orderBy('grado', 'ASC')->get();
        return compact('grados');
    }
    public function grados($nivel)
    {
        $grados = \DB::select("SELECT grado.id,concat(grado,' ',seccion) as grado FROM grado WHERE idNivel= $nivel ORDER BY grado ASC,seccion ASC");
        return compact('grados');
    }
    /**
    * @param grado y nivel
    * @return secciones
    */
    public function secciones($nivel,$grado)
    {
        $secciones = Grado::select("id","seccion")->where([
            ['idNivel', '=', $nivel],['grado','=', $grado]
            ])->get();
        return compact('secciones');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit(grado $grado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grado $grado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Grado::where('id',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
