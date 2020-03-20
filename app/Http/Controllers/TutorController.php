<?php

namespace App\Http\Controllers;

use App\tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
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
        $tutor  = new Tutor();
        $hoy    = date("Y-m-d");
        $val    = "";
        $msj    = "";
        $objTutor   =   Tutor::select("*")->where("DNIDocente",$request->tutor["docente"])
                        ->where("Lectivo",$request->tutor["lectivo"])->get();
        if(count($objTutor) == 0)
        {
            $tutor->DNIDocente  = $request->tutor["docente"];
            $tutor->IDGrado     = $request->tutor["grado"];
            $tutor->Lectivo     = $request->tutor["lectivo"];
            $tutor->created_at  = $hoy;
            $tutor->save();
            $msj = "Tutor Asignado Corretamente";
            $val = "success";
        }else{
            $val = "warning";
            $msj = "Docente ya es tutor";
        }
        return compact("msj","val");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(tutor $tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tutor $tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(tutor $tutor)
    {
        //
    }
}
