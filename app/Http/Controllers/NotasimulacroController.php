<?php

namespace App\Http\Controllers;

use App\notasimulacro;
use App\grado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class NotasimulacroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simulacros = \DB::select("SELECT s.IDSimulacro,g.id, s.Bimestre,s.Numero,ni.Nivel,g.grado,g.seccion,
        date_format(s.Fecha,'%d-%m') as fecha FROM notasimulacro n 
        JOIN simulacros s ON n.IDSimulacro = s.IDSimulacro 
        JOIN grado g ON n.IDGrado = g.id 
        JOIN nivel ni ON g.idNivel = ni.ID 
        WHERE s.Lectivo = YEAR(curdate()) 
        GROUP BY s.IDSimulacro,n.IDGrado 
        ORDER BY s.Bimestre DESC,s.Numero DESC, ni.ID DESC,g.grado DESC");
        return compact("simulacros");
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

    function object_sorter($clave,$orden=null) {
        return function ($a, $b) use ($clave,$orden) {
              $result=  ($orden=="DESC") ? strnatcmp($b[$clave], $a[$clave]) :  strnatcmp($a[$clave], $b[$clave]);
              return $result;
        };
    }
    public function store(Request $request)
    {
        $condicion = false;
        $formato = 0;
        $notas = $request->notas;
        $simulacro = $request->simulacro;
        $hoy = date("Y-m-d");
        $simulacros = Notasimulacro::where([
            ["IDSimulacro","=",$simulacro["simulacro"]],
            ["IDGrado","=",$simulacro["seccion"]],
            ])->count();
        if($simulacros == 0)
        {
            $condicion = true;
            foreach ($notas as $key) {
                $nota = new Notasimulacro();
                $nota->IDSimulacro      =  $simulacro["simulacro"];
                $nota->IDGrado          =  $simulacro["seccion"];
                $nota->DNIAlumno        =  $key["dni"];
               
                $nota->RV                   =  $key["rv"] * $simulacro["p1"];
                $nota->RM                   =  $key["rm"] * $simulacro["p1"];
                $nota->AritmeticaMatematica =  $key["aritmetica"] * $simulacro["p2"];
                $nota->Algebra              =  $key["algebra"] * $simulacro["p2"];
                $nota->Geometria            =  $key["geometria"] * $simulacro["p2"];
                $nota->Trigonometria        =  $key["trigonometria"] * $simulacro["p2"];
                $nota->LenguajeComunicacion =  $key["lenguaje"] * $simulacro["p2"];
                $nota->literatura           =  $key["literatura"] * $simulacro["p2"];
                $nota->planlector           =  $key["planlector"] * $simulacro["p2"];
                $nota->biologiaciencia      =  $key["biologia"] * $simulacro["p2"];
                $nota->quimica              =  $key["quimica"] * $simulacro["p2"];
                $nota->fisica               =  $key["fisica"] * $simulacro["p2"];
                $nota->historia             =  $key["historia"] * $simulacro["p2"];
                $nota->historiauniversal    =  $key["historiauniversal"] * $simulacro["p2"];
                $nota->geografia            =  $key["geografia"] * $simulacro["p2"];
                $nota->civicapersonal       =  $key["civica"] * $simulacro["p2"];
                $nota->ingles               =  $key["ingles"] * $simulacro["p2"];
                
                $nota->puntaje          = $key["acumulado"];
                $nota->promedio         =  $key["promedio"];
                $nota->ordenmerito      =  $key["ordenmerito"];
                $nota->created_at       =  $hoy;
                $nota->save();
            }
        }
            return compact("condicion");
    }
    public function ordenados(Request $request)
    {
        $notas = $request->notas; 
        usort($notas, $this->object_sorter('acumulado','DESC'));
        $i  =   1;
        $alumnos = array();
        foreach($notas as $alumno)
        {
            $dni = $alumno["dni"];
            $alumnos += array("$dni"=>$i);
            $i++;
        }
        return compact("alumnos");
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\notasimulacro  $notasimulacro
     * @return \Illuminate\Http\Response
     */
    public function show($grado,$simulacro)
    {
        $ObjGrado    = Grado::select("grado","idNivel")->where("id","=",$grado)->get()[0]; 
        $g = (int)$ObjGrado->grado;
        $n = (int)$ObjGrado->idNivel;
        $simulacros = (object)$this->getNotasSimulacro($grado,$simulacro)["notas"];
        if($n == 2)
        {
            if($g <= 2)
            {
                $pdf = PDF::loadView('templates.notasimulacroF3',compact("simulacros"));
                $pdf->setPaper('A3','landscape');
                return $pdf->stream('Simulacro.pdf');
                // return view("templates.notasimulacroF3")->with("simulacros",$simulacros);           
            }else{
                $pdf = PDF::loadView('templates.notasimulacroF4',compact("simulacros"));
                $pdf->setPaper('A3','landscape');
                return $pdf->stream('Simulacro.pdf');
                // return view("templates.notasimulacroF4")->with("simulacros",$simulacros);           
            }
        }else{
            if($g <= 3)
            {
                $pdf = PDF::loadView('templates.notasimulacroF1',compact("simulacros"));
                $pdf->setPaper('A4','landscape');
                return $pdf->stream('Simulacro.pdf');
                // return view("templates.notasimulacroF1")->with("simulacros",$simulacros);           
            }else{
                $pdf = PDF::loadView('templates.notasimulacroF2',compact("simulacros"));
                $pdf->setPaper('A3','landscape');
                return $pdf->stream('Simulacro.pdf');
                // return view("templates.notasimulacroF2")->with("simulacros",$simulacros);           
            }
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\notasimulacro  $notasimulacro
     * @return \Illuminate\Http\Response
     */
    public function simulacros()
    {
        $dni = \Auth::user()->user;
        $simulacros = \DB::select("SELECT s.IDSimulacro,s.Bimestre,s.Numero,ni.Nivel,g.grado,g.seccion
        FROM notasimulacro n 
        JOIN simulacros s ON n.IDSimulacro = s.IDSimulacro 
        JOIN grado g ON n.IDGrado = g.id 
        JOIN nivel ni ON g.idNivel = ni.ID 
        WHERE s.Lectivo = YEAR(curdate()) 
        AND n.DNIAlumno = $dni
        GROUP BY s.Bimestre,n.IDGrado 
        ORDER BY s.Bimestre DESC");
        return compact("simulacros");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\notasimulacro  $notasimulacro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notasimulacro $notasimulacro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\notasimulacro  $notasimulacro
     * @return \Illuminate\Http\Response
     */
    public function destroy(notasimulacro $notasimulacro)
    {
        //
    }
    public function datos()
    {
        $user = \Auth::user()->user;
        $datos = \DB::select("SELECT a.DNI,concat(' ',`ApePaterno`,' ', `ApeMaterno`,', ',`Nombre`) as 'alumno',
        n.Nivel, g.grado,g.seccion 
        FROM alumnogrado ag 
        JOIN alumno a ON ag.DNIAlumno = a.DNI 
        JOIN grado g ON ag.IDGrado = g.id 
        JOIN nivel n ON g.idNivel = n.ID 
        WHERE ag.DNIAlumno = '$user' AND ag.Lectivo = year(curdate())");
        $dato = $datos[0];
        return compact("dato");
    }
    public function notasIndividuales($bimestre)
    {
        $dni = \Auth::user()->user;
        if(isset(\Auth::user()->user))
        {
            $notas = \DB::select("SELECT n.*,concat(a.ApePaterno,' ',a.ApeMaterno,', ',a.Nombre) as Nombres, 
            g.grado,g.seccion,ni.Nivel,s.Bimestre,s.Numero 
            FROM notasimulacro n 
            JOIN alumno a ON n.DNIAlumno = a.DNI 
            JOIN grado g ON n.IDGrado = g.id 
            JOIN nivel ni ON g.idNivel = ni.ID 
            JOIN simulacros s ON n.IDSimulacro = s.IDSimulacro 
            WHERE s.Bimestre = $bimestre AND s.Lectivo = YEAR(curdate()) AND n.DNIAlumno= $dni");
            $datos = $this->datos();
            $dato  = $datos["dato"];
            $nivel = $dato->Nivel;
            $grado = (int)$dato->grado;
            if($nivel == "PRIMARIA")
            {
                if ($grado <= 3) {
                    $pdf = PDF::loadView('templates/notaF1',compact("dato","notas","bimestre"));
                    $pdf->setPaper("A4","landscape");
                    return $pdf->stream('simulacro.pdf');
                }else {
                    $pdf = PDF::loadView('templates/notaF2',compact("dato","notas","bimestre"));
                    return $pdf->stream('simulacro.pdf');
                }
                
            }elseif ($nivel == "SECUNDARIA"){
                if ($grado <= 2) {
                    $pdf = PDF::loadView('templates/notaF3',compact("dato","notas","bimestre"));

                    return $pdf->stream('simulacro.pdf');
                }else {
                    $pdf = PDF::loadView('templates/notaF4',compact("dato","notas","bimestre"));
                    return $pdf->stream('simulacro.pdf');
                }
            }
            
        }else{
            
            return view("templates.error");     
        }
    }
    /*
    |
    |Obtener notas generales de alumnos
    |
    */
    public function getNotasSimulacro($grado,$simulacro)
    {
        $notas = \DB::select("SELECT n.*,concat(a.ApePaterno,' ',a.ApeMaterno,', ',a.Nombre) as Nombres, g.grado,g.seccion,ni.Nivel,s.Bimestre,s.Numero  FROM notasimulacro n 
        JOIN alumno a ON n.DNIAlumno = a.DNI
        JOIN grado g ON n.IDGrado = g.id
        JOIN nivel ni ON g.idNivel = ni.ID
        JOIN simulacros s ON n.IDSimulacro = s.IDSimulacro
        WHERE n.IDGrado = $grado AND n.IDSimulacro = $simulacro AND s.Lectivo = YEAR(curdate())");
        return compact("notas");
    }
}
