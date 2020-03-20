<?php

namespace App\Http\Controllers;

use App\ingresos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class IngresosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mes = date('m');
        // $ingresos = \DB::select("SELECT IFNULL(SUM(monto),0) as ingresos FROM ingresos WHERE MONTH(Fecha) = $mes");
        $ingresos   = Ingresos::select(\DB::raw('IFNULL(SUM(monto),0) as ingresos'))->where(\DB::raw('MONTH(Fecha)'),"=",$mes)->get();
        $ingresoAux = $ingresos[0]->ingresos;
        $ingreso    = number_format($ingresoAux,2,".",",");
        return compact("ingreso");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($desde,$hasta)
    {
        
        $zdesde = date("d/m/Y", strtotime($desde));
        $zhasta = date("d/m/Y", strtotime($hasta));
        $IsConsistent = true;

        if($desde > $hasta) $IsConsistent = false;

        $ingresos = Ingresos::join("alumno AS a","ingresos.DNIAlumno","a.DNI")
                    ->select("ingresos.ID AS IDComprobante",\DB::RAW("concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as Alumno"),"ingresos.Comprobante","ingresos.Concepto","ingresos.Monto",\DB::RAW("date_format(ingresos.Fecha,'%d-%m-%Y') AS Fecha"))
                    ->where("Fecha",">=",$desde)
                    ->where("Fecha","<=",$hasta)
                    ->get();
        $pdf = PDF::loadView('templates.ventas', compact ('ingresos','zdesde','zhasta','IsConsistent'));
        return $pdf->stream('Reporte.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $venta  = new Ingresos();
        $hoy    = date("Y-m-d");
        $venta->DNIAlumno   = $request->venta["alumno"];
        $venta->Concepto    = $request->venta["descripcion"];
        $venta->Monto       = $request->venta["monto"];
        $venta->Comprobante = $request->venta["comprobante"];
        $venta->Fecha       = $request->venta["fecha"];
        $venta->created_at  = $hoy;
        $venta->save();
        return "ok";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $ingresos = Ingresos::join("alumno AS a","ingresos.DNIAlumno","a.DNI")
                    ->select("ingresos.ID AS IDComprobante",\DB::RAW("concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as Alumno"),"ingresos.Comprobante","ingresos.Concepto","ingresos.Monto","ingresos.Fecha")
                    ->where("Fecha",">=",$request->venta['desde'])
                    ->where("Fecha","<=",$request->venta['hasta'])
                    ->get();
        $num = count($ingresos);
        $IsConsistent = true;
        if($num == 0) $IsConsistent = false;
        return compact("ingresos","IsConsistent");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function edit(ingresos $ingresos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ingresos $ingresos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ingresos  $ingresos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ingresos $ingresos)
    {
        //
    }
}
