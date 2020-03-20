<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\docente;
use App\User;

class docenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::select("*")->get();
        return compact('docentes');
    }
    public function cursos($grado)
    {
        // $cursos     = \DB::select("select c.id,c.Nombre from curso c
        // where idGrado = $grado");
        $cursos = \DB::select("SELECT g.id,c.Curso as Nombre FROM gradocurso g 
        JOIN cursos c ON g.IDCurso = c.ID WHERE g.idGrado = $grado");
        return compact('cursos');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($nivel)
    {
        // $docentes   = \DB::select("select d.DNI, concat_ws(' ',d.Nombre,d.Apellidos) as Nombre FROM docente d");
        $grados     = \DB::select("select id,concat_ws(' ',grado,seccion) as grado from grado where idNivel = $nivel");
        
        return compact('grados');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docente =  new Docente();
        $hoy     =  date("Y-m-d");
        $user    =  new User();
        $msj     =  "";
        $val     =  "";    

        $objDocente = Docente::select("*")->where("DNI",$request->docente['dni'])->get();
        $objUser    = User::select("*")->where("user",$request->docente['dni'])->get();

        if(count($objDocente) == 0)
        {
            $docente->DNI               =   $request->docente['dni'];
            $docente->Nombre            =   strtoupper($request->docente['nombre']);
            $docente->Apellidos         =   strtoupper($request->docente['ape']);
            $docente->Direccion         =   strtoupper($request->docente['dir']);
            $docente->Celular           =   $request->docente['cel'];
            $docente->Correo            =   strtolower($request->docente['correo']);
            $docente->Fecha             =   $request->docente['fecha'];
            $docente->Estado            =   1;
            $docente->created_at        =   $hoy;
            $docente->save();
            $val = "success";
            $msj = "Docente Agregado con éxito";
        }else{
            $val = "warning";
            $msj = "Docente ya existe";
        }
        if(count($objUser) == 0)
        {
            $user->user                 =   $request->docente['dni'];
            $user->password             =   bcrypt("Inicio01");
            $user->tipo                 =   2;
            $user->estado               =   1;
            $user->save();
            $msj = " accesos activados";
        }
        
        return compact("msj","val");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dni = \Auth::user()->user;
        $docentes = \DB::select("select concat_ws(' ',Nombre,Apellidos) as docente from docente where DNI = $dni");
        $docente = $docentes[0]->docente;
        return compact('docente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $docente = Docente::where('DNI',$request->docente['dni'])->update(
                [
                    'Estado'         => $request->docente['estado'],
                ]
        );
        $user = User::where('user',$request->docente['dni'])->update(
            [
                'estado'         => $request->docente['estado'],
            ]
    );
        return "OK";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hoy   = date("Y-m-d");
        $docente = Docente::where('DNI',$request->docente['dni'])->update(
                [
                    'Nombre'        => strtoupper($request->docente['nombre']),
                    'Apellidos'     => strtoupper($request->docente['ape']),
                    'Direccion'     => strtoupper($request->docente['dir']),
                    'Celular'       => strtoupper($request->docente['cel']),
                    'Correo'        => strtoupper($request->docente['correo']),
                    'Fecha'         => $request->docente['fecha'],
                    'updated_at'    => $hoy,
                ]
        );
        return "OK";
       
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

    // public function getDatos()
    // {
    //     $docentes=\DB::select("CALL `SP_MostrarDocentes`();");
    //     return compact('docentes');
    // }

}
