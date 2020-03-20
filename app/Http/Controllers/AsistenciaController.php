<?php

namespace App\Http\Controllers;

use App\asistencia;
use App\alumno;
use App\matricula;
use App\apoderado;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anio = Date("Y");
        $asistencia  =   Alumno::join("alumnogrado AS ag","alumno.DNI","=","ag.DNIAlumno")
                                    ->join("grado AS g","ag.IDGrado","=","g.id")
                                    ->join("nivel AS n","g.idNivel","=","n.ID")
                                    ->select(\DB::raw("alumno.DNI,concat_ws(' ',alumno.ApePaterno,alumno.ApeMaterno,alumno.Nombre) as Nombre"),"n.Nivel", "g.grado","g.seccion")
                                    ->where("ag.Lectivo",$anio)
                                    ->orderBy("n.ID","ASC")
                                    ->orderBy("g.grado","ASC")
                                    ->orderBy("alumno.ApePaterno","ASC")
                                    ->get();
        return compact("asistencia"); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($dni)
    {
        $client = new Client([ 
            
            'headers' => [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            ]]);
        $asistencia = new Asistencia();
        $hoy        = Date("Y-m-d");
        $hora       = Date("H:i:s");
        $msj        = "";
        $title      = "";
        $type       = "";
        $aux        = Asistencia::where("DNI",$dni)->where("Fecha",$hoy)->get()->count();
        if($aux == 0)
        {
            $asistencia->DNI            = $dni;
            $asistencia->HoraEntrada    = $hora;
            $asistencia->tipo           = 0;
            $asistencia->Fecha          = $hoy;
            $asistencia->Estado         = 1;
            $asistencia->save();
            $type                       = "success";
            $title                      = "OK";
            $msj                        = "Asistencia Registrada";
            $objApoderado = Apoderado::join("apoderadoalumno AS ap","apoderado.DNI","ap.DNIApoderado")
                            ->select("apoderado.Celular")->where("ap.DNIAlumno",$dni)->get();
            foreach($objApoderado as $item)
            {
                $phone = "51".$item->Celular;
                try {
                    $res = $client->request('POST', 'https://eu83.chat-api.com/instance100612/sendMessage?token=kqi08109w0ltn8c9',
                            [
                                'body' => json_encode(
                                    [
                                        "phone" => $phone,
                                        "body" => "Su hijo(a) registro su entrada a las: ".$hora,
                                    ]
                                )
                            ]
                            );
                    
                    $val  = $res->getBody()->getContents();
                    $valor  = json_decode($val,true);
                    $msj    = $msj . " Whatsapp enviado";
                } catch (\Throwable $th) {
                    $type                       = "warning";
                    $title                      = "Aviso";
                    $msj                        = "WhatsApp no enviado";
                }
            }            
            
        }else
        {
            $type                       = "warning";
            $title                      = "Aviso";
            $msj                        = "Alumno ya registró entrada el dia de hoy";
            
        }
        
        return compact("type","title","msj");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function salir($dni)
    {
        $client = new Client([ 
            
            'headers' => [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            ]]);
        $hoy        = Date("Y-m-d");
        $hora       = Date("H:i:s");
        $msj        = "";
        $title      = "";
        $type       = "";
        $error      = "";
        $aux        = Asistencia::select("HoraSalida")->where("DNI",$dni)->where("Fecha",$hoy)->get();
        $auxz       = $aux[0]->HoraSalida;
        if($auxz == null)
        {
            Asistencia::where("DNI",$dni)->where("Fecha",$hoy)->update([
                "HoraSalida" => $hora,
            ]);
            $type                       = "success";
            $title                      = "OK";
            $msj                        = "Salida Registrada";
            $objApoderado = Apoderado::join("apoderadoalumno AS ap","apoderado.DNI","ap.DNIApoderado")
                            ->select("apoderado.Celular")->where("ap.DNIAlumno",$dni)->get();
            foreach($objApoderado as $item)
            {
                $phone = "51".$item->Celular;
                try {
                    $res = $client->request('POST', 'https://eu83.chat-api.com/instance100612/sendMessage?token=kqi08109w0ltn8c9',
                            [
                                'body' => json_encode(
                                    [
                                        "phone" => $phone,
                                        "body" => "Su hijo(a) registro su salida a las: ".$hora,
                                    ]
                                )
                            ]
                            );
                    
                    $val  = $res->getBody()->getContents();
                    $valor  = json_decode($val,true);
                    $msj    = $msj . " Whatsapp enviado";
                } catch (\Throwable $th) {
                    $error = "Falta configurar accesos wsp";
                }
            } 
        }else
        {
            $type                       = "warning";
            $title                      = "Aviso";
            $msj                        = "Alumno ya registró salida el dia de hoy";
        }
        
        return compact("type","title","msj","auxz","error");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $anio = Date("Y");
        $hoy        = Date("Y-m-d");
        $salida  =   Asistencia::join("alumnogrado AS ag","asistencia.DNI","=","ag.DNIAlumno")
                                    ->join("grado AS g","ag.IDGrado","=","g.id")
                                    ->join("nivel AS n","g.idNivel","=","n.ID")
                                    ->join("alumno AS a","asistencia.DNI","=","a.DNI")
                                    ->select(\DB::raw("a.DNI,concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as Nombre"),"n.Nivel", "g.grado","g.seccion","asistencia.HoraEntrada","asistencia.HoraSalida")
                                    ->where("ag.Lectivo",$anio)
                                    ->where("asistencia.Fecha",$hoy)
                                    ->orderBy("n.ID","ASC")
                                    ->orderBy("g.grado","ASC")
                                    ->orderBy("a.ApePaterno","ASC")
                                    ->get();
        return compact("salida");     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function edit(asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asistencia $asistencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\asistencia  $asistencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(asistencia $asistencia)
    {
        //
    }
}
