<?php

namespace App\Http\Controllers;

use App\pensiones;
use App\ingresos;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PensionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pagados = \DB::select("SELECT count(*) as cant FROM `pensiones` where Mes=month(curdate()) and Estado=1");
       $nopagados = \DB::select("SELECT count(*) as cant FROM `pensiones` where Mes=month(curdate()) and Estado=0");
       $cantidadpagada = $pagados[0]->cant;
       $cantidadnopagada= $nopagados[0]->cant;

       return compact("cantidadpagada","cantidadnopagada");
       
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
        $hoy = date("Y-m-d");
        $ingreso    = new Ingresos();
        $ingreso->DNIAlumno     = $request->dni;
        $ingreso->Concepto      = "PENSIÓN";
        $ingreso->Monto         = $request->total;
        $ingreso->Fecha         = $request->fecha;
        $ingreso->Comprobante   = $request->comprobante;
        $ingreso->created_at    = $hoy;
        $ingreso->save();
        foreach ($request->pension as $ID) {
            Pensiones::where('ID',$ID)->update(['Estado' => 1]);
        }
        return "OK";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pensiones  $pensiones
     * @return \Illuminate\Http\Response
     */
    public function show($dni)
    {
        $cuotas = Pensiones::where("DNIAlumno",$dni)->where("Estado",0)->get();
        $n      = -1;
        foreach ($cuotas as $key) {
            $n++;
            $zmes = $this->meses($key->Mes);
            $mes = $zmes["messelected"];
            $cuotas[$n]->zmes= $mes;
        }
        return compact("cuotas","n");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pensiones  $pensiones
     * @return \Illuminate\Http\Response
     */
    public function edit(pensiones $pensiones)
    {
        //
    }

    public function meses($nmes)
    {
        $mes[3] = "Marzo";
        $mes[4] = "Abril";
        $mes[5] = "Mayo";
        $mes[6] = "Junio";
        $mes[7] = "Julio";
        $mes[8] = "Agosto";
        $mes[9] = "Setiembre";
        $mes[10] = "Octubre";
        $mes[11] = "Noviembre";
        $mes[12] = "Diciembre";

        $messelected = $mes[$nmes];
        return compact("messelected");
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pensiones  $pensiones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pensiones $pensiones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pensiones  $pensiones
     * @return \Illuminate\Http\Response
     */
    public function destroy(pensiones $pensiones)
    {
        //
    }
    public function lista($tipo)
    {
        if($tipo == 1)
        {
            $lista = \DB::select("SELECT a.DNI,count(a.ApePaterno) as cuotas, concat_ws(' ',a.ApePaterno,a.ApeMaterno) as apellidos,
            a.Nombre,n.Nivel, concat_ws(' ',g.grado,g.seccion) as grado 
            FROM alumno a 
            JOIN alumnogrado ag ON a.DNI = ag.DNIAlumno 
            JOIN grado g ON ag.IDGrado = g.id 
            JOIN pensiones p ON ag.DNIAlumno = p.DNIAlumno 
            JOIN nivel n ON g.idNivel = n.ID 
            WHERE ag.Lectivo = year(curdate()) AND p.Estado = 0 AND p.Mes <= (month(curdate())-1) 
            GROUP BY ag.DNIAlumno 
            ORDER BY g.grado ASC,g.seccion ASC");
        }else{
            $lista = \DB::select("SELECT a.DNI,count(a.ApePaterno) as cuotas, concat_ws(' ',a.ApePaterno,a.ApeMaterno) as apellidos,
            a.Nombre,n.Nivel, concat_ws(' ',g.grado,g.seccion) as grado 
            FROM alumno a 
            JOIN alumnogrado ag ON a.DNI = ag.DNIAlumno 
            JOIN grado g ON ag.IDGrado = g.id 
            JOIN pensiones p ON ag.DNIAlumno = p.DNIAlumno 
            JOIN nivel n ON g.idNivel = n.ID 
            WHERE ag.Lectivo = year(curdate()) AND p.Estado = 0  
            GROUP BY ag.DNIAlumno 
            ORDER BY g.grado ASC,g.seccion ASC");
        }
        return compact("lista");
    }
    public function sendWSP(Request $request)
    {
        $objMsj = \DB::select("SELECT count(p.ID) as Cuotas,SUM(p.Monto) as Monto, 
        concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as Alumno,
        n.Nivel, concat_ws(' ',g.grado,g.seccion) as grado,concat('51',apd.Celular) as Celular 
        FROM alumno a 
        JOIN alumnogrado ag ON a.DNI = ag.DNIAlumno 
        JOIN grado g ON ag.IDGrado = g.id 
        JOIN pensiones p ON ag.DNIAlumno = p.DNIAlumno 
        JOIN nivel n ON g.idNivel = n.ID 
        JOIN apoderadoalumno ap ON ag.DNIAlumno = ap.DNIAlumno
        JOIN apoderado apd ON ap.DNIApoderado = apd.DNI
        WHERE ag.Lectivo = year(curdate()) AND p.Estado = 0 AND p.Mes <= 9
        GROUP BY apd.DNI,ag.DNIAlumno
        ORDER BY g.grado ASC,g.seccion ASC");
        // $phones = array(51992024281,51921433593,51951212752,51976060390);
        $client = new Client([ 
            'headers' => [
            'Content-type' => 'application/json',
            'Accept' => 'application/json',
            ]]);
        if(count($objMsj) > 0)
        {
            foreach ($objMsj as $key) {
                $res = $client->request('POST', 'https://eu34.chat-api.com/instance75501/sendMessage?token=qju568bw1oonmfcu',
                [
                    'body' => json_encode(
                        [
                            "phone" => $key->Celular,
                            "body" => "Presenta " .$key->Cuotas. " cuota(as) vencida(as),por un monto de S/ ".number_format($key->Monto,2,".",",")." de su menor hijo(a) ".$key->Alumno." del ".$key->grado." (".$key->Nivel."), por favor apersonarse a cancelar. Atte IEP. La PRE",
                        ]
                    )
                ]
                );
            }
            $val  = $res->getBody()->getContents();
            $valor  = json_decode($val,true);    
            return compact("valor");
        }    
        
        return "no se encontraron cuotas pendientes";
    } 
}
