<?php

namespace App\Http\Controllers;

use App\docentecurso;
use Illuminate\Http\Request;

class DocentecursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dni = \Auth::user()->user;
        $grados = \DB::select("select g.id,concat_ws(' ',g.grado,g.seccion) as grado FROM grado g
        JOIN gradocurso c ON g.id = c.idGrado
        JOIN docentecurso dc ON c.id = dc.idCurso
        WHERE  dc.DNIDocente = $dni");
        return compact("grados");
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
        $docentecurso = new Docentecurso();
        $hoy = Date('Y-m-d');
        $docentecurso->DNIDocente   =  $request->docente['dni'];
        $docentecurso->idCurso      =  $request->docente['curso'];
        $docentecurso->estado       =  1;
        $docentecurso->created_at   =  $hoy;
        $docentecurso->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\docentecurso  $docentecurso
     * @return \Illuminate\Http\Response
     */
    public function show($grado)
    {
        $dni = \Auth::user()->user;
        $cursos = \DB::select("SELECT c.id, cs.Curso as curso FROM gradocurso c
        JOIN docentecurso dc ON c.id = dc.idCurso
        JOIN cursos cs ON c.IDCurso = cs.ID
        WHERE  dc.DNIDocente = '$dni' and c.idGrado = '$grado'");
        return compact("cursos");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\docentecurso  $docentecurso
     * @return \Illuminate\Http\Response
     */
    public function edit(docentecurso $docentecurso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\docentecurso  $docentecurso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docentecurso $docentecurso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\docentecurso  $docentecurso
     * @return \Illuminate\Http\Response
     */
    public function destroy(docentecurso $docentecurso)
    {
        //
    }
}
