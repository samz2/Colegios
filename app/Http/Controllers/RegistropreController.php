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
        $condicion = true;
        $hoy = date("Y-m-d");
        $lectivo = date("Y");
        $alumnos = $request->alumnos;
        $registro = $request->registro;
        $Bimestre         =  $request->registro["bimestre"];
        $IDGradoCurso     =  $request->registro["area"];
        $IDCursoCapacidad =  $request->registro["capacidad"];
        $msj              =  " ";
        foreach ($alumnos as $key) {
            $cant = Registropre::select("*")->where("DNIAlumno",$key["dni"])
                    ->where("Lectivo",$lectivo)->where("Bimestre",$Bimestre)
                    ->where("IDGradoCurso",$IDGradoCurso)->where("IDCursoCapacidad",$IDCursoCapacidad)
                    ->get()->count();
            if($cant == 0)
            {
                $registro = new registropre();
                $registro->DNIAlumno        =  $key["dni"];
                $registro->Lectivo          =  $lectivo;
                $registro->Bimestre         =  $Bimestre;
                $registro->IDGradoCurso     =  $IDGradoCurso;
                $registro->IDCursoCapacidad =  $IDCursoCapacidad;
                $registro->C1               =  $key["c1"];
                $registro->C2               =  $key["c2"];
                $registro->C3               =  $key["c3"];
                $registro->ExamenBimestral  =  $key["bimestral"];
                $registro->Simulacro        =  $key["simulacro"];
                $registro->Promedio         =  $key["promedio"];
                $registro->created_at       =  $hoy;
                $registro->save();
            }else{
                $condicion  = false;
                $msj        = $msj." ".$key["dni"];
            }        
        }
        if($condicion)
        {
            $type   = "success";
            $text   = "Se ingresaron todos los registros";
            $title  = "Bien";
        }else{
            $type   = "warning";
            $text   = "Los registros de los siguientes alumnos: ".$msj." ya fueron ingresados";
            $title  = "Advertencia";
        }
    
        return compact("type","text","title");
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
