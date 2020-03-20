<?php

namespace App\Http\Controllers;

use App\capacidad;
use Illuminate\Http\Request;

class CapacidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capacidades = \DB::select("SELECT c.IDCapacidad,n.Nivel,c.Posicion, cu.Curso,c.Descripcion 
        FROM capacidad c 
        JOIN cursos cu ON c.IDCurso = cu.ID 
        JOIN nivel n ON cu.Nivel = n.ID");
        return compact("capacidades");
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
        $capacidad = new Capacidad();
        $capacidad->IDCurso     = $request->capacidad["curso"];
        $capacidad->Descripcion = $request->capacidad["capacidad"];
        $capacidad->Posicion    = $request->capacidad["posicion"];
        $capacidad->created_at  = $hoy;
        $capacidad->save();
        return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function show(capacidad $capacidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function edit(capacidad $capacidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hoy   = date("Y-m-d");
        $capacidad = Capacidad::where('IDCapacidad',$request->capacidad['id'])->update(
                [
                'Descripcion' => $request->capacidad["capacidad"],
                'Posicion' => $request->capacidad["posicion"],
                'updated_at' => $hoy,

                ]
        );
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\capacidad  $capacidad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Capacidad::where('IDCapacidad',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
