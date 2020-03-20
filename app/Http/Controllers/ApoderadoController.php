<?php

namespace App\Http\Controllers;

use App\apoderado;
use App\apoderadoalumno;
use Illuminate\Http\Request;

class ApoderadoController extends Controller
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
        $apoderado          = new Apoderado();
        $msj                = "";
        $IsConsistent       = true;
        $hoy                = date("Y-m-d");
        $apoderadoalumno    = new ApoderadoAlumno();
        $objApoderado       = Apoderado::select("*")->where("DNI","=",$request->apoderado['dni'])->get();
        $objApoderadoAlumno = Apoderadoalumno::select("*")->where("DNIApoderado","=",$request->apoderado['dni'])
                              ->where("DNIAlumno","=",$request->apoderado['alumno'])->get();
        if(count($objApoderado) == 0)
        {
            $apoderado->DNI         = $request->apoderado['dni'];
            $apoderado->Nombre      = $request->apoderado['nombre'];
            $apoderado->Celular     = $request->apoderado['celular'];
            $apoderado->created_at  = $hoy;
            $apoderado->save();
            $msj = $msj."Apoderado Registrado Correctamente,";
        }else{
            $msj = $msj."Apoderado ya Existe,";
            $IsConsistent = false;
        }
        if(count($objApoderadoAlumno) == 0)
        {
            $apoderadoalumno->DNIAlumno     = $request->apoderado['alumno'];
            $apoderadoalumno->DNIApoderado  = $request->apoderado['dni'];
            $apoderadoalumno->Parentesco    = $request->apoderado['parentesco'];
            $apoderadoalumno->created_at  = $hoy;
            $apoderadoalumno->save();
            $IsConsistent = false;
            $msj = $msj." Relación guardada con éxito.";
        }else
        {
            $msj = $msj." Relación ya existe.";
        }
        return compact("msj","IsConsistent");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\apoderado  $apoderado
     * @return \Illuminate\Http\Response
     */
    public function show($dni)
    {
        $ObjAlumno = \DB::select("SELECT a.DNI,a.Nombre,concat_ws(' ',a.ApePaterno,a.ApeMaterno) as apellidos,
        a.Direccion,n.Nivel, g.grado,g.seccion
        FROM alumno a 
        JOIN alumnogrado ag ON a.DNI=ag.DNIAlumno 
        JOIN grado g ON ag.IDGrado = g.id JOIN nivel n ON g.idNivel = n.ID
        WHERE ag.Lectivo = year(curdate()) AND a.DNI = $dni");

        $objApoderado = \DB::select("SELECT aa.Parentesco,ap.Nombre,ap.Celular
        FROM apoderadoalumno aa 
        JOIN apoderado ap ON aa.DNIApoderado = ap.DNI
        WHERE aa.DNIAlumno = $dni");
        if(count($ObjAlumno)>0)
        {
            $alumno = $ObjAlumno[0];
            
        }else
        {
            $alumno = array("DNI"=>null,"Nombre"=>null,"Apellidos"=>null,"Direccion"=>null,"Nivel"=>null,"grado"=>null,"seccion"=>null);
            
        }
        if(count($objApoderado)>0)
        {
            $apoderados = $objApoderado;
        }else
        {
            $apoderados = array(0=>array("Parentesco"=>"no se encontraron registros","Nombre"=>"no se encontraron registros","Celular"=>"no se encontraron registros"));
        }
        
        
        return compact("alumno","apoderados");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\apoderado  $apoderado
     * @return \Illuminate\Http\Response
     */
    public function edit(apoderado $apoderado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\apoderado  $apoderado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, apoderado $apoderado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\apoderado  $apoderado
     * @return \Illuminate\Http\Response
     */
    public function destroy(apoderado $apoderado)
    {
        //
    }
}
