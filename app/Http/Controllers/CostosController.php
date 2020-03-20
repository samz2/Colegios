<?php

namespace App\Http\Controllers;

use App\costos;
use Illuminate\Http\Request;

class CostosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costos = Costos::all();
        return compact("costos");
    }

    public function productos()
    {
        $productos = Costos::select("ID","Descripcion","Monto")->where("ID","!=",1)->where("ID","!=",2)->get();
        return compact("productos");
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
        $costos = new Costos();
        $hoy   = date("Y-m-d");
        $costos->Descripcion    = strtoupper($request->costo["descripcion"]);
        $costos->Monto          = $request->costo["costo"];
        $costos->created_at     = $hoy;
        $costos->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $matricula  = 0;
        $pension    = 0;
        $costos     = Costos::select("Monto")->where('Descripcion','like','%MATRICULA%')->get();
        $matricula  = $costos[0]->Monto;
        $costos1 = Costos::select("Monto")->where('Descripcion','like','%PENSI%')->get();
        $pension = $costos1[0]->Monto;
        return compact('matricula','pension');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function edit(costos $costos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $hoy   = date("Y-m-d");
        $costos = Costos::where('ID',$request->costo['id'])->update(
                [
                'Descripcion' => strtoupper($request->costo["descripcion"]),
                'Monto' => $request->costo["costo"],
                'updated_at' => $hoy
                ]
        );
        print_r($costos);
        return "OK";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\costos  $costos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eliminar   =   Costos::where('ID',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    }
}
