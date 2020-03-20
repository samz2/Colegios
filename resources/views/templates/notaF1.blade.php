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
        background-color: #696969;
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
      $sum = 0;  
      $grado    = $dato->grado;
      $seccion  = $dato->seccion;
      $nivel    = $dato->Nivel;
      echo "<br>";
      $i = 1;
    @endphp
    <center>
        <h2>RESULTADOS SIMULACRO</h2>
        <hr>
        <table border="1" style="font-size: 11px" class="text-center" cellpadding="0" cellspacing="0" >
            <tr>
                <td colspan="2" rowspan="4"><img src="img/logoPRE.png" alt=""></td>
                <td colspan="4" style="font-size: 20px" class="amarillo">{{$grado}} ° {{$seccion}} - {{$nivel}}</td>
                <td  colspan="6" style="font-size: 20px" class="celeste">{{$bimestre}}° BIMESTRE</td>
            </tr>
            
            <tr>
                <td colspan="10" style="font-size: 20px" class="verde">ALUMNO: {{$dato->alumno}}</td>
            </tr>
            <tr class="celeste">
                <td rowspan="6" ><b><p class="verticalText">RAZONAMIENTO<br>VERBAL</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">RAZONAMIENTO<br>MATEMÁTICO</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">MATEMÁTICA</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">COMUNICACIÓN</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">CIENCIA<br>Y AMBIENTE</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">PERSONAL<br>SOCIAL</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">INGLÉS</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">PUNTAJE</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">CALIFICACIÓN</p></b></td>
                <td rowspan="6" ><b><p class="verticalText">ORDEN<br>DE MÉRITO</p></b></td>
            </tr>
            <tr></tr>
            
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2" style="font-size: 20px" class="verde" >SIMULACROS</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
                <td width="5%"><b>SIMULACRO</b></td>
                <td class="text-left" width="80%"><b>NRO.</b></td>
            </tr>
            @foreach ($notas as $item)
            <tr>
                <td class="text-left">SIMULACRO</td>
                <td>{{$i}}</td>
                <td>{{$item->RV}}</td>
                <td>{{$item->RM}}</td>
                <td>{{$item->AritmeticaMatematica}}</td>
                <td>{{$item->LenguajeComunicacion}}</td>
                <td>{{$item->biologiaciencia}}</td>
                <td>{{$item->civicapersonal}}</td>
                <td>{{$item->ingles}}</td>
                <td><b>{{$item->puntaje}}</b></td>
                <td><b>{{$item->promedio}}</b></td>
                <td><b>{{$item->ordenmerito}}</b></td>
            </tr>
            @php
                $sum += $item->promedio; 
                $i++;
            @endphp
            @endforeach
            <tr>
                <td colspan="10" class="text-right"><b>PROMEDIO BIMESTRAL</b></td>
                <td><b>{{round($sum/($i-1))}}</b></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </center>
</body>
</html>