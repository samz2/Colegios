<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;
use App\User;

class personaController extends Controller
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
        $hoy     =$this->hoy();
        $alumno = new Alumno();
        $User    = new User();   
        $alumno->DNI               =$request->persona['dni'];
        $persona->Nombre            =ucwords($request->persona['nombre']);
        $persona->ApePaterno         =ucwords($request->persona['pater']);
        $persona->ApeMaterno         =ucwords($request->persona['mater']);
        $persona->Celular           =$request->persona['cel'];
        $persona->Direccion         =ucwords($request->persona['dir']);
        // $persona->Correo            =strtolower($request->persona['correo']);
        // $persona->Tipo              =$request->persona['tipo'];
        $persona->created_at        =$hoy;
        $persona->Fecha             =$request->persona['fecha'];
        $User->id                   =$request->persona['dni'];
        $User->user                 =$request->persona['dni'];
        $User->password             =bcrypt($request->persona['dni']);
        $User->tipo                 =$request->persona['tipo'];
        $User->estado               =1;
        $persona->save();
        $User->save();        
        return $persona;
    }
    public function hoy()
    {
        $aux = \DB::select("select curdate() as hoy");
        foreach($aux as $arr)
        {
            $hoy=$arr->hoy;
        }
        return $hoy;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
