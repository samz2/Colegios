<?php

namespace App\Http\Controllers;

use App\cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cursos = Cursos::select("cursos.ID,cursos.Nivel,cursos.Curso")->join("nivel");
        $cursos = \DB::select("SELECT c.ID,n.ID as IDNivel,n.Nivel,c.Curso FROM cursos c JOIN nivel n ON c.Nivel=n.ID ORDER BY n.Nivel DESC");
        return compact("cursos");
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
        $hoy = date('Y-m-d');
        $curso = new Cursos();
        $curso->Nivel       = $request->curso['nivel'];
        $curso->Curso       = strtoupper($request->curso['curso']);
        $curso->created_at  = $hoy;
        $curso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Cursos::all()->where("Nivel","=",$id);
        return compact("cursos");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function edit(cursos $cursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Cursos::where('ID',$request->curso['id'])->update(['Curso' => strtoupper($request->curso['curso'])]);
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cursos  $cursos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Cursos::where('ID',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
