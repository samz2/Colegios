<?php

namespace App\Http\Controllers;

use App\auxiliar;
use App\User;
use Illuminate\Http\Request;

class AuxiliarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auxiliares = Auxiliar::where("Estado","Activo")->get();
        return compact("auxiliares");
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
        $auxiliar = new Auxiliar();
        
        $user   = new User();
        $hoy    = date("Y-m-d");
        $msj    = "";
      

        $objAlumno              = Auxiliar::where("DNIAuxiliar",$request->aux['dni'])->get()->count();
        if ($objAlumno == 0) 
        {
            $auxiliar->DNIAuxiliar  = $request->aux["dni"];
            $auxiliar->Nombre       = strtoupper($request->aux["nombre"]);
            $auxiliar->Apellidos    = strtoupper($request->aux["apellidos"]);
            $auxiliar->Fecha        = $request->aux["fecha"];
            $auxiliar->Celular      = $request->aux["celular"];
            $auxiliar->created_at   = $hoy;
            $auxiliar->save();
            $type                   = "success";
            $title                  = "OK";
            $msj                    = "AUXILIAR CREADO CORRECTAMENTE";  
        }else
        {
            $type                   = "warning";
            $title                  = "Advertencia";
            $msj                    = "AUXILIAR YA EXISTE";   
        }
        $objUser                = User::where("user",$request->aux['dni'])->get()->count();
        if ($objUser == 0) 
        {
            $user->user             = $request->aux['dni'];
            $user->password         = bcrypt("Inicio01"); 
            $user->tipo             = 4;
            $user->estado           = 1;
            $user->created_at       = $hoy;
            $user->save();
        }else
        {
            user::where("user",$request->aux['dni'])->update([
                'estado' => 1,
                ]);
        }
        return compact("type","title","msj");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function show(auxiliar $auxiliar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function edit(auxiliar $auxiliar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, auxiliar $auxiliar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\auxiliar  $auxiliar
     * @return \Illuminate\Http\Response
     */
    public function destroy(auxiliar $auxiliar)
    {
        //
    }
}
