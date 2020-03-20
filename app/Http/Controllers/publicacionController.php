<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\publicacion;

class publicacionController extends Controller
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
        $exploded       =   explode(',',$request->publicacion['archivo']);
        $decoded        =   base64_decode($exploded[1]);
        if(str_contains($exploded[0],'jpeg'))
        {
            $ext = 'jpg';
        }
        else if(str_contains($exploded[0],'png'))
        {
            $ext = 'png';
        }
        else
        {
            $ext = 'pdf';
        }
        $fileName       =   str_random().'.'.$ext;
        $path           =   public_path().'/archivos/'.$fileName;
        file_put_contents($path,$decoded); 
        $hoy            =   $this->hoy();
        $publicacion    =   new Publicacion();
        $publicacion->idCliente     =   $request->publicacion['idCliente'];
        $publicacion->diario        =   $request->publicacion['diario'];
        $publicacion->titulo        =   $request->publicacion['titulo'];
        $publicacion->descripcion   =   $request->publicacion['descripcion'];
        $publicacion->archivo       =   $fileName;
        $publicacion->fechainicio   =   $request->publicacion['fechainicio'];
        $publicacion->fechafin      =   $request->publicacion['fechafin'];
        $publicacion->created_at    =   $hoy;
        $publicacion->save();
        return $publicacion;
    }
    public function storeCliente(Request $request)
    {
        $user = \Auth::user()->user;
        $exploded       =   explode(',',$request->publicacion['archivo']);
        $decoded        =   base64_decode($exploded[1]);
        if(str_contains($exploded[0],'jpeg'))
        {
            $ext = 'jpg';
        }
        else if(str_contains($exploded[0],'png'))
        {
            $ext = 'png';
        }
        else
        {
            $ext = 'pdf';
        }
        $fileName       =   str_random().'.'.$ext;
        $path           =   public_path().'/archivos/'.$fileName;
        file_put_contents($path,$decoded); 
        $hoy            =   $this->hoy();
        $publicacion    =   new Publicacion();
        $publicacion->idCliente     =   $user;
        $publicacion->diario        =   $request->publicacion['diario'];
        $publicacion->titulo        =   $request->publicacion['titulo'];
        $publicacion->descripcion   =   $request->publicacion['descripcion'];
        $publicacion->archivo       =   $fileName;
        $publicacion->fechainicio   =   $request->publicacion['fechainicio'];
        $publicacion->fechafin      =   $request->publicacion['fechafin'];
        $publicacion->created_at    =   $hoy;
        $publicacion->save();
        return $publicacion;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
    public function hoy()
    {
        $aux = \DB::select("select curdate() as hoy");
        foreach($aux as $arr)
        {
            $hoy=$arr->hoy;
        }
        return $hoy;
    }
    public function getDatos()
    {
        $publicaciones  =   \DB::select("CALL `SP_MostrarPublicaciones`(1);");
        return compact('publicaciones');
    }
    public function getDatos2()
    {
        $publicaciones  =   \DB::select("CALL `SP_MostrarPublicaciones`(2);");
        
        return compact('publicaciones');
    }

    public function getDetalle($id)
    {
        return view('detalle',compact('id'));
    }
    public function getClientes()
    {
        $clientes  =   \DB::select("CALL `SP_MostrarClientes`();");    
        return compact('clientes');
    }
    public function getImpetu()
    {
        $user = \Auth::user()->user;
        $publicaciones  =   \DB::select("CALL `SP_MostrarImpetu`($user);");
        return compact('publicaciones');
    }
    public function getChoche()
    {
        $user = \Auth::user()->user;
        $publicaciones  =   \DB::select("CALL `SP_MostrarChoche`($user);");
        return compact('publicaciones');
    }
    public function getReporte()
    {
        $publicaciones  =   \DB::select("CALL `SP_Reporte`();");
        return compact('publicaciones');
    }
}
