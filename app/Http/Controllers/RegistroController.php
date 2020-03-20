<?php

namespace App\Http\Controllers;

use App\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
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
        $dni = \Auth::user()->user;
        $curso = $request->docente['aux'];
        $unidad = $request->docente['unidad'];
        $anio = date('Y');
        $hoy  = date('Y-m-d');
        $notas = array();
        $alumnos = array();
        // $alumnos = $request->alumnos;
        $notas = $request->notas;
        $n = 0;
        // foreach ($alumnos as $key) {
        //     $notas[$n]['dni'] = $key['DNI'];
        // }
        foreach ($notas as $key) {
            $condicion = true;
            // $registro = Registro::select('ID')->where([
            //     ['DNIAlumno','=',$key['dni']],
            //     ['IDCurso','=',$curso],
            //     ['Unidad','=',$unidad],
            //     ['Anio','=',$anio]
            //     ])->get();
            $auxDNI = $key['dni'];
            $registro = \DB::select("SELECT ID FROM registro WHERE DNIAlumno = $auxDNI AND IDCurso = $curso AND Unidad = $unidad AND Anio = $anio");
            if(count($registro)>0)
            {
                $condicion = false; 
                break 1;
            }  
            if($condicion)
            {
                $notas = new Registro();
                $notas->DNIAlumno   = $key['dni'];
                $notas->IDCurso     = $curso;
                $notas->Unidad      = $unidad;
                $notas->Tarea1      = $key['tarea1'];
                $notas->Tarea2      = $key['tarea2'];
                $notas->Tarea3      = $key['tarea3'];
                $notas->Tarea4      = $key['tarea4'];
                $notas->promedioTareas = $key['pt'];
                $notas->Feedback1   = $key['f1'];
                $notas->Feedback2   = $key['f2'];
                $notas->Feedback3   = $key['f3'];
                $notas->Feedback4   = $key['f4'];
                $notas->promedioFeedback = $key['pf'];
                $notas->RevisionLibros = $key['revisionlibro'];
                $notas->Simulacro   = $key['simulacro'];
                $notas->Oral        = $key['examen'];
                $notas->Prom1       = $key['nc1'];
                $notas->RevisionCuaderno = $key['revisioncuaderno'];
                $notas->ExamenMensual = $key['examenmensual'];
                $notas->PromedioMensual = $key['promediomensual'];
                $notas->DNIDocente  = $dni;
                $notas->Anio        = $anio;
                $notas->created_at  = $hoy;
                $notas->save();
            }
            
        }
        return compact("condicion");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function show(registro $registro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function edit(registro $registro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registro $registro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registro  $registro
     * @return \Illuminate\Http\Response
     */
    public function destroy(registro $registro)
    {
        //
    }
}
