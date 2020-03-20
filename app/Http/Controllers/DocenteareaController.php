<?php

namespace App\Http\Controllers;

use App\docentearea;
use Illuminate\Http\Request;

class DocenteareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docenteAreas = \DB::select("SELECT GROUP_CONCAT(da.ID) as ids,d.Nombre,d.Apellidos,a.Descripcion as area,GROUP_CONCAT(g.grado,g.seccion) as grados FROM docentearea da 
        JOIN docente d ON da.DNIDocente = d.DNI
        JOIN grado g ON da.IDGrado = g.id
        JOIN area a ON da.IDArea = a.IDArea
        WHERE da.Lectivo = year(curdate())  AND da.Estado = 1
        GROUP BY a.IDArea");
        return compact("docenteAreas");
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
        $hoy    = date("Y-m-d");
        foreach($request->gradosAsignados as $grado)
        {
            $docentearea                = new docentearea();
            $docentearea->DNIDocente    = $request->docentearea["docente"];
            $docentearea->IDGrado       = $grado;
            $docentearea->IDArea        = $request->docentearea["area"];
            $docentearea->Lectivo       = $request->docentearea["lectivo"];
            $docentearea->Estado        = 1;
            $docentearea->created_at    = $hoy;
            $docentearea->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\docentearea  $docentearea
     * @return \Illuminate\Http\Response
     */
    public function show(docentearea $docentearea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\docentearea  $docentearea
     * @return \Illuminate\Http\Response
     */
    public function edit(docentearea $docentearea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\docentearea  $docentearea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docentearea $docentearea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\docentearea  $docentearea
     * @return \Illuminate\Http\Response
     */
    public function destroy(docentearea $docentearea)
    {
        //
    }

    /**
     * This function is used for to call grades asigned.
     * use authentication user for the query
     * 
     */
    public function showgrades()
    {
        $user   = \Auth::user()->user;
        $anio   = date("Y");
        $grados = \DB::table("docentearea")
                  ->join("grado","docentearea.IDGrado","=","grado.id")
                  ->select("grado.id","grado.grado","grado.seccion")
                  ->groupBy('grado.id')
                  ->where("docentearea.DNIDocente","=",$user)
                  ->where("docentearea.Lectivo","=",$anio)
                  ->get();
        return compact("grados");                  
    }

    /**
     * This function is used for to call areas assigned.
     * use authentication user for the query
     * 
     */
    public function showareas($grado)
    {
        $user   = \Auth::user()->user;
        $anio   = date("Y");
        $areas = \DB::table("docentearea")
                  ->join("area","docentearea.IDArea","=","area.IDArea")
                  ->select("area.IDArea","area.Descripcion")
                  ->where("docentearea.DNIDocente","=",$user)
                  ->where("docentearea.Lectivo","=",$anio)
                  ->where("docentearea.IDGrado","=",$grado)
                  ->get();
        return compact("areas");                  
    }

    /**
     * This function is used for to call capacities of the areas.
     * use authentication user for the query
     * 
     */
    public function showcapacities($area)
    {
        $capacities = \DB::table("area")
                  ->join("capacidad","area.IDCurso","=","capacidad.IDCurso")
                  ->select("capacidad.IDCapacidad","capacidad.Descripcion")
                  ->where("area.IDArea","=",$area)
                  ->get();
        return compact("capacities");                  
    }
}
