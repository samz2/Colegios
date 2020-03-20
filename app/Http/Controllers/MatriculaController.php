<?php

namespace App\Http\Controllers;

use App\matricula;
use App\ingresos;
use App\pensiones;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *   {
     *   "phone": 51992024281,
     *   "body": "prueba chat api"
     *   }
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matriculados = \DB::select("SELECT a.DNI,concat_ws(' ',a.ApePaterno,a.ApeMaterno) as apellidos, 
        a.Nombre,concat_ws(' ',g.grado,g.seccion) as grado,n.Nivel 
        FROM alumno a 
        JOIN alumnogrado ag ON a.DNI = ag.DNIAlumno 
        JOIN grado g ON ag.IDGrado = g.id 
        JOIN nivel n ON g.idNivel = n.ID 
        WHERE ag.Lectivo = year(curdate()) 
        ORDER BY n.ID, g.grado ASC,g.seccion,a.ApePaterno ASC");
        return compact("matriculados");
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
        $n = 1;
        $existe     = false;
        $hoy = date("Y-m-d");
        $error = "Alumno ya está matriculado este año lectivo";
        $alumno = Matricula::select("ID")->where([
            ['DNIAlumno', '=', $request->matricula["alumno"]],
            ['Lectivo','=', $request->matricula["lectivo"]]
            ])->get();
        $dniAlumno = $request->matricula["alumno"];    
        if(count($alumno) == 0)
        {
            $matricula  = new Matricula();
            $ingreso    = new Ingresos();
            while($n<=10)
            {
                $pensiones  = new Pensiones();
                $pensiones->DNIAlumno   = $dniAlumno; 
                $pensiones->Mes         = $n+2;
                $pensiones->Monto       = $request->matricula["pension"];
                $pensiones->Anio        = $request->matricula["lectivo"];
                $pensiones->Estado      = 0;
                $pensiones->created_at  = $hoy;
                $pensiones->save();
                $n++;
            }
            
            $matricula->DNIAlumno   = $dniAlumno;
            $matricula->IDGrado     = $request->matricula["seccion"];
            $matricula->Lectivo     = $request->matricula["lectivo"];
            $matricula->Fecha       = $request->matricula["fecha"];
            $matricula->created_at  = $hoy;
            $ingreso->DNIAlumno     = $request->matricula["alumno"];
            $ingreso->Concepto      = "MATRICULA";
            $ingreso->Comprobante   = $request->matricula["recibo"];
            $ingreso->Fecha         = $request->matricula["fecha"];
            $ingreso->Monto         = $request->matricula["precio"];
            $ingreso->created_at    = $hoy;
            $ingreso->save();
            $matricula->save();
            $existe = true;
        }
        return compact('error','existe');    
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function show($idgrado)
    {
        $lista = \DB::select("SELECT a.DNI, concat_ws(' ',a.ApePaterno,a.ApeMaterno,a.Nombre) as alumno FROM alumnogrado ag 
        JOIN alumno a ON ag.DNIAlumno = a.DNI
        WHERE ag.IDGrado = $idgrado AND lectivo = year(curdate()) ORDER BY a.ApePaterno,a.ApeMaterno,a.Nombre asc");
        $alumnos = array();
        $i = 1;
        foreach ($lista as $key) {
        $alumnosaux = (object) array(
            "index"         => $i,
            "dni"           =>  $key->DNI,
            "alumno"        =>  $key->alumno,
            "rv"            =>  null,
            "rm"            =>  null,
            "aritmetica"    =>  null,
            "algebra"       =>  null,
            "geometria"     =>  null,
            "trigonometria" =>  null,
            "lenguaje"      =>  null,
            "literatura"    =>  null,
            "planlector"    =>  null,
            "biologia"      =>  null,
            "quimica"       =>  null,
            "fisica"        =>  null,
            "historia"      =>  null,
            "historiauniversal"   =>  null,
            "geografia"     =>  null,
            "civica"        =>  null,
            "ingles"        =>  null,
            "acumulado"     => null,
            "promedio"      =>  null,
            "ordenmerito"   =>  null,
        );
        array_push($alumnos,$alumnosaux);
        $i++;
        }
        return compact("lista","alumnos");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function edit(matricula $matricula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matricula $matricula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\matricula  $matricula
     * @return \Illuminate\Http\Response
     */
    public function destroy(matricula $matricula)
    {
        //
    }

    public function matriculados()
    {
        $cantidades = \DB::select("SELECT count(*) as cant FROM `alumnogrado` where Lectivo = year(curdate())");
        $cantidad = $cantidades[0]->cant;
        return compact("cantidad");
    }

    public function grados()
    {
        $grados = \DB::select("SELECT n.Nivel,g.id, g.grado,g.seccion 
        FROM grado g 
        JOIN nivel n ON g.idNivel = n.ID 
        ORDER BY n.ID ASC,g.grado ASC,g.seccion ASC");
        return compact("grados");
    }

    public function alumnos($id)
    {
        if (isset(\Auth::user()->tipo)) 
        {
            if(\Auth::user()->tipo == 1)
            {
                $tutor = "";
                $alumnos = \DB::select("SELECT concat_ws('  ',a.ApePaterno,a.ApeMaterno,a.Nombre) as alumno 
                FROM alumnogrado g 
                JOIN alumno a ON g.DNIAlumno = a.DNI
                WHERE g.IDGrado = $id AND g.Lectivo = year(curdate())
                ORDER BY a.ApePaterno ASC");

                $grados = \DB::select("SELECT n.Nivel,g.id, g.grado,g.seccion 
                FROM grado g 
                JOIN nivel n ON g.idNivel = n.ID WHERE g.id = $id");

                $objTutor =  \DB::select("SELECT concat_ws('  ',d.Nombre,d.Apellidos) as tutor 
                FROM tutor t JOIN docente d ON t.DNIDocente = d.DNI
                WHERE t.IDGrado = $id AND t.Lectivo = year(curdate()) ORDER BY t.IDTutor DESC");
                if(count($objTutor)>0)
                {
                    $tutor = $objTutor[0]->tutor;
                }
            
                $pdf = PDF::loadView('templates.lista',compact("alumnos","grados","tutor"));
                return $pdf->stream('lista.pdf');
            }
            else {
                return view("templates.error");
            }
        }
        else {
            return view("templates.error");
        }
    }
}
