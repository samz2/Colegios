<?php

namespace App\Http\Controllers;

use App\area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = \DB::table('area')
                ->join('cursos', 'area.IDCurso', '=', 'cursos.ID')
                ->join('nivel', 'cursos.Nivel', '=', 'nivel.ID')
                ->select('area.IDArea', 'nivel.Nivel', 'cursos.curso', 'area.Descripcion','area.Posicion')
                ->orderBy('area.Posicion', 'ASC')
                ->get();
                return compact("areas");
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
        $area = new Area();
        $area->IDCurso      = $request->area["curso"];
        $area->Descripcion  = strtoupper($request->area["area"]);
        $area->Posicion     = $request->area["posicion"];
        $area->created_at   = $hoy;
        $area->save();
        return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function show($curso)
    {
        $areas = Area::select("*")->where("IDCurso","=",$curso)->get();
        return compact("areas");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hoy   = date("Y-m-d");
        $area = Area::where('IDArea',$request->area['id'])->update(
                [
                'Descripcion' => strtoupper($request->area["area"]),
                'posicion' => strtoupper($request->area["posicion"]),
                'updated_at' => $hoy
                ]
        );
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Area::where('IDArea',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
