<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>simulacros</title>
</head>
<style>
    .verticalText {
    writing-mode: vertical-lr;
    transform: rotate(270deg);
    
    }
    .text-left {
    text-align: left !important;
    }

    .text-right {
    text-align: right !important;
    }

    .text-center {
    text-align: center !important;
    }
    .fondo{
        background-color: #505556;
        color: #ffffff;
    }
    .amarillo{
        background-color: #ffff06;
    }
    .verdeopaco{
        background-color: #7aec66;
    }
    .verde{
        background-color: #00ff00;
    }
    .celeste{
        background-color: #52d9f5;
    }
    table {
    border-collapse: collapse;
    }
</style>
<body>
    @php
        $i = 1;
        $objSimulacro = (array)$simulacros; 
        $simulacro = $objSimulacro[0];
        // print_r($objGrado);
        $grado      = $simulacro->grado;
        $seccion    = $simulacro->seccion;
        $nivel      = $simulacro->Nivel;
        $bimestre   = $simulacro->Bimestre;
        $numero     = $simulacro->Numero;
        // $se
    @endphp
    <center>
        <h2>RESULTADOS SIMULACRO</h2>
        <hr>
        <table border="1" style="font-size: 12px" class="text-center" cellpadding="0" cellspacing="0" >
            <tr>
                <td colspan="2" rowspan="4"><img src="img/logoPRE.png" alt=""></td>
                <td colspan="8" class="amarillo" style="font-size: 26px">{{$grado}} ° {{$seccion}} - {{$nivel}}</td>
                <td  colspan="11" class="celeste" style="font-size: 26px">{{$bimestre}}° BIMESTRE</td>
            </tr>
            <tr>
                <td colspan="19" style="font-size: 26px" class="verde">RESULTADOS GENERALES DEL SIMULACRO N° {{$numero}}</td>
            </tr>
            <tr style="font-size: 10px" class="celeste">
                <td rowspan="6" ><b><p class="verticalText">RAZONAMIENTO VERBAL</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">ARITMÉTICA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">ÁLGEBRA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">GEOMETRÍA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">TRIGONOMETRÍA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">LENGUAJE</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">LITERATURA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">PLAN LECTOR</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">BIOLOGÍA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">QUÍMICA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">FÍSICA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">HISTORIA DEL PERÚ</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">GEOGRAFÍA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">CÍVICA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">INGLÉS</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">PUNTAJE</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">CALIFICACIÓN</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">ORDEN DE MÉRITO</p></b></td>
            </tr>
            <tr>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" class="verde" style="font-size: 26px">SIMULACRO N° {{$numero}}</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td width="5%" class="fondo" style="font-size: 14px"><b>N°</b></td>
                <td class="text-left fondo" width="80%" style="font-size: 14px"><b>APELLIDOS Y NOMBRES</b></td>
            </tr>
            @foreach ($simulacros as $item)
            <tr>
                <td style="font-size: 14px">{{$i}}</td>
                <td style="font-size: 14px" class="text-left">{{$item->Nombres}}</td>
                <td>{{$item->RV}}</td>
                <td>{{$item->RM}}</td>
                <td>{{$item->AritmeticaMatematica}}</td>
                <td>{{$item->Algebra}}</td>
                <td>{{$item->Geometria}}</td>
                <td>{{$item->trigonometria}}</td>
                <td>{{$item->LenguajeComunicacion}}</td>
                <td>{{$item->literatura}}</td>
                <td>{{$item->planlector}}</td>
                <td>{{$item->biologiaciencia}}</td>
                <td>{{$item->quimica}}</td>
                <td>{{$item->fisica}}</td>
                <td>{{$item->historia}}</td>
                <td>{{$item->geografia}}</td>
                <td>{{$item->civicapersonal}}</td>
                <td>{{$item->ingles}}</td>
                <td><b>{{$item->puntaje}}</b></td>
                <td><b>{{$item->promedio}}</b></td>
                <td><b>{{$item->ordenmerito}}</b></td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </table>
    </center>    
</body>
</html>