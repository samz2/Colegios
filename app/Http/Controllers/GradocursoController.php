<?php

namespace App\Http\Controllers;

use App\gradocurso;
use Illuminate\Http\Request;

class GradocursoController extends Controller
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
     *SELECT tbl.Curso,GROUP_CONCAT(tbl.Bimestre) as bimestre,GROUP_CONCAT(tbl.promedio) as promedio 
     *FROM (SELECT cs.Curso, r.Bimestre, ROUND(AVG(r.PromedioMensual),0) as promedio 
     *FROM registro r JOIN gradocurso c ON r.IDCurso = c.id JOIN cursos cs ON c.IDCurso = cs.ID 
     *WHERE r.DNIAlumno = '70579328' GROUP BY r.Bimestre) as tbl
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso  = $request->curso['id'];
        $hoy    = date("Y-m-d");
        foreach($request->gradosAsignados as $grado)
        {
            $gradocurso = new Gradocurso();
            $gradocurso->IDCurso = $curso;
            $gradocurso->idGrado = $grado;
            $gradocurso->created_at = $hoy;
            $gradocurso->save();
        }
        return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gradocurso  $gradocurso
     * @return \Illuminate\Http\Response
     */
    public function show(gradocurso $gradocurso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gradocurso  $gradocurso
     * @return \Illuminate\Http\Response
     */
    public function edit(gradocurso $gradocurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gradocurso  $gradocurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gradocurso $gradocurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gradocurso  $gradocurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(gradocurso $gradocurso)
    {
        //
    }
}
