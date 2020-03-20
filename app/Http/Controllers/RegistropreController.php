<?php

namespace App\Http\Controllers;

use App\registropre;
use Illuminate\Http\Request;

class RegistropreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $condicion = false;
        $hoy = date("Y-m-d");
        $lectivo = date("Y");
        $alumnos = $request->alumnos;
        $registro = $request->registro;
        // print_r($regiregistrotro);
        foreach ($alumnos as $key) {
            $registro = new registropre();
            $registro->DNIAlumno        =  $key["dni"];
            $registro->Lectivo          =  $lectivo;
            $registro->Bimestre         =  $request->registro["bimestre"];
            $registro->IDGradoCurso     =  $request->registro["area"];
            $registro->IDCursoCapacidad =  $request->registro["capacidad"];
            $registro->C1               =  $key["c1"];
            $registro->C2               =  $key["c2"];
            $registro->C3               =  $key["c3"];
            $registro->ExamenBimestral  =  $key["bimestral"];
            $registro->Simulacro        =  $key["simulacro"];
            $registro->Promedio         =  $key["promedio"];
            $registro->created_at       =  $hoy;
            $registro->save();
        }
    
        return compact(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registropre  $registropre
     * @return \Illuminate\Http\Response
     */
    public function show($grado,$bimestre)
    {
        $lista = \DB::select("SELECT a.DNI, concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as alumno FROM alumnogrado ag 
        JOIN alumno a ON ag.DNIAlumno = a.DNI
        WHERE ag.IDGrado = $grado AND lectivo = year(curdate()) ORDER BY a.ApePaterno,a.ApeMaterno,a.Nombre asc");
        $alumnos = array();
        $i = 1;
        foreach ($lista as $key) {
        $objNota = \DB::select("SELECT ROUND(AVG(n.promedio),0) as prom FROM notasimulacro n 
        JOIN simulacros s ON n.IDSimulacro = s.IDSimulacro 
        WHERE n.DNIAlumno = $key->DNI AND s.Bimestre = $bimestre"); 
        $simulacro = $objNota[0]->prom;   
        $alumnosaux = (object) array(
            "indice"         => $i,
            "dni"           =>  $key->DNI,
            "alumno"        =>  $key->alumno,
            "c1"            =>  null,
            "c2"            =>  null,
            "c3"            =>  null,
            "bimestral"     => null,
            "simulacro"     =>  $simulacro,
            "promedio"      =>  null,
        );
        array_push($alumnos,$alumnosaux);
        $i++;
        }
        return compact("lista","alumnos");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registropre  $registropre
     * @return \Illuminate\Http\Response
     */
    public function edit(registropre $registropre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registropre  $registropre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registropre $registropre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registropre  $registropre
     * @return \Illuminate\Http\Response
     */
    public function destroy(registropre $registropre)
    {
        //
    }
}
