<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumno;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;

class alumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = \DB::select("SELECT `DNI`,`Nombre` as 'nombre',`ApePaterno` as 'paterno',
        `ApeMaterno` as 'materno', `Direccion` as 'direccion',fechaNac as Fecha,YEAR(CURDATE())-YEAR(`fechaNac`) + 
        IF(DATE_FORMAT(CURDATE(),'%m-%d') > DATE_FORMAT(`fechaNac`,'%m-%d'), 0 , -1 ) as 'edad'
        FROM `alumno`");
        return compact("alumnos");
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
     * Show the PDF boleta.
     *
     * @return \Illuminate\Http\Response
     */
    public function boleta()
    {
        if(isset(\Auth::user()->tipo))
        {
            $user = \Auth::user()->user;
            $nivel = \DB::select("SELECT concat_ws(' ',`Nombre`,`ApePaterno`,
            `ApeMaterno`) as 'alumno',n.Nivel, g.grado,g.seccion FROM alumnogrado ag 
            JOIN alumno a ON ag.DNIAlumno = a.DNI
            JOIN grado g ON ag.IDGrado = g.id
            JOIN nivel n ON g.idNivel = n.ID
            WHERE ag.DNIAlumno = '$user' AND ag.Lectivo = year(curdate())");
            $notas = $this->notassecundaria($user);
            $alumno = $nivel[0];
            $pdf = PDF::loadView('boleta', compact ('alumno','notas'));
            return $pdf->stream('boleta.pdf');
        }else{
            return view('boleta')->with('validacion',0);
        }
        
    }
    public function boletainformativa()
    {
        
        if(isset(\Auth::user()->user))
        {
            $notasb1 = $this->notas(1)["notas"];
            $notasb2 = $this->notas(2)["notas"];
            $notasb3 = $this->notas(3)["notas"];
            $notasb4 = $this->notas(4)["notas"];
            $datos = $this->datos();
            $dato  = $datos["dato"];
            $nivel = $dato->Nivel;
            $grado = (int)$dato->grado;
            if($nivel == "PRIMARIA")
            {
                if ($grado <= 3) {
                    $pdf = PDF::loadView('boletaprimaria',compact("dato","notasb1","notasb2","notasb3","notasb4"));
                    return $pdf->stream('boleta.pdf');
                }else {
                    $pdf = PDF::loadView('boletaprimaria2',compact("dato","notasb1","notasb2","notasb3","notasb4"));
                    return $pdf->stream('boleta.pdf');
                }
                
            }elseif ($nivel == "SECUNDARIA"){
                if ($grado <= 2) {
                    $pdf = PDF::loadView('boletasecundaria',compact("dato","notasb1","notasb2","notasb3","notasb4"));
                    return $pdf->stream('boleta.pdf');
                }else {
                    $pdf = PDF::loadView('boletasecundaria2',compact("dato","notasb1","notasb2","notasb3","notasb4"));
                    return $pdf->stream('boleta.pdf');
                }
            }
            
        }else{
            
            return view("templates.error");     
        }
            
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
        $alumno = new Alumno();
        $user   = new User();
        $hoy    = date("Y-m-d");
        $msj    = "";
        $val    = false;

        $objAlumno              = Alumno::where("DNI",$request->alumno['dni'])->get();
        if (count($objAlumno) == 0) 
        {
            $alumno->DNI            = $request->alumno['dni'];
            $alumno->Nombre         = strtoupper($request->alumno['nombre']);
            $alumno->ApePaterno     = strtoupper($request->alumno['pater']);
            $alumno->ApeMaterno     = strtoupper($request->alumno['mater']);
            $alumno->Direccion      = strtoupper($request->alumno['dir']);
            $alumno->fechaNac       = $request->alumno['fecha'];
            $alumno->Estado         = 1;
            $alumno->created_at     = $hoy;
            $msj                    = "ALUMNO AGREGADO CORRECTAMENTE";  
            $val                    = true;
            $alumno->save();
        }else
        {
            $msj                    = "ALUMNO YA SE ENCUENTRA REGISTRADO"; 
        }
        
        $objUser                = user::where("user",$request->alumno['dni'])->get();
        if (count($objUser) == 0) 
        {
            $user->user             = $request->alumno['dni'];
            $user->password         = bcrypt("Inicio01"); 
            $user->tipo             = 3;
            $user->estado           = 1;
            $user->created_at       = $hoy;
            $user->save();
        }else
        {
            user::where("user",$request->alumno['dni'])->update([
                'estado' => 1,
                ]);
        }
        
        
        return compact("val","msj");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $year = date("Y");
        $alumnos =  Alumno::join("alumnogrado AS ag","alumno.DNI","ag.DNIAlumno")
                    ->select("alumno.DNI AS code",\DB::RAW("concat_ws(' ',alumno.Nombre,alumno.ApePaterno,
                    alumno.ApeMaterno) as 'label'"))
                    ->where("ag.Lectivo",$year)->get();
        return compact("alumnos");
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
    public function update(Request $request)
    {
        $hoy   = date("Y-m-d");
        $capacidad = Alumno::where('DNI',$request->alumno['dni'])->update(
                [
                    'Nombre'         => strtoupper($request->alumno['nombre']),
                    'ApePaterno'     => strtoupper($request->alumno['pater']),
                    'ApeMaterno'     => strtoupper($request->alumno['mater']),
                    'Direccion'      => strtoupper($request->alumno['dir']),
                    'fechaNac'       => $request->alumno['fecha'],
                    'updated_at'     => $hoy,
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
        $eliminar   =   Alumno::where('DNI',$id)->delete();
        if($eliminar){
            return "OK";
        }else{
            return "FAIL";
        }
    
    }
    public function notassecundaria($dni)
    {
        $notaB1 = \DB::select("SELECT c.IDCurso, r.Bimestre, ROUND(AVG(r.PromedioMensual),0) as promedio 
        FROM registropre r 
        JOIN curso c ON r.IDCurso = c.id 
        WHERE r.DNIAlumno = '$dni' GROUP BY r.Bimestre");
        // $nota = $notaB1;
        return compact("notaB1");    
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
    public function notas($bimestre)
    {
        $user = \Auth::user()->user;
        $notas = array();
        
        $objNotas = \DB::select("SELECT a.Posicion as curso ,c.Posicion as capacidad, rp.Promedio 
        FROM registropre rp
        JOIN area a ON rp.IDGradoCurso = a.IDArea
        JOIN capacidad c ON rp.IDCursoCapacidad = c.IDCapacidad
        WHERE rp.Bimestre = $bimestre AND 
        rp.Lectivo = year(curdate()) AND 
        rp.DNIAlumno = '$user'
        ORDER BY a.Posicion,c.Posicion");

        foreach ($objNotas as $key) {
            $notas[$key->curso][$key->capacidad] = $key->Promedio;
        }

        return compact('notas');
    }
    /**
    *SELECT tbl.Curso,GROUP_CONCAT(tbl.Bimestre) as bimestre,GROUP_CONCAT(tbl.promedio) as promedio 
    *FROM (SELECT cs.Curso, r.Bimestre, ROUND(AVG(r.PromedioMensual),0) as promedio FROM registro r 
    *JOIN gradocurso c ON r.IDCurso = c.id JOIN cursos cs ON c.IDCurso = cs.ID WHERE r.DNIAlumno = '70579328' 
    * GROUP BY r.Bimestre,r.IDCurso ) as tbl GROUP BY tbl.Curso
    */
}
