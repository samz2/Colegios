<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>Lista de Alumnos</title>
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
        border-collapse: collapse!important;
        width: 100px;
        margin: auto;
        text-align: center;
    }
</style>
<body>
    @php
    $grado = $grados[0]->grado;
    $seccion = $grados[0]->seccion;
    $nivel = $grados[0]->Nivel;
    $i = 1;
    @endphp
    <center>
        <table>
            <tr>
                <td width=200>
                    <img src="img/logoPRE.png" height="150" width="150" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <h2>LISTA DE ALUMNOS</h2>    
                </td>
            </tr>
        </table>
        
        <hr>
        <table border="1" style="font-size: 14px" cellpadding="0" cellspacing="0" >
            <tr>
                <td class="text-right" width=80><b>Nivel: </b></td>
                <td width=300><b>{{$nivel}}</td>
            </tr>
            <tr>
                <td class="text-right" width=80><b>Grado: </b></td>
                <td width=300><b>{{$grado}}</td>
            </tr>
            <tr>
                <td class="text-right" width=80><b>Sección: </b></td>
                <td width=300><b>{{$seccion}}</td>
            </tr>
            <tr>
                <td class="text-right" width=80><b>Tutor(a): </b></td>
                <td width=300><b>{{$tutor}}</b></td>
            </tr>
        </table>
        <br><br>
        <table border="1" style="font-size: 14px" cellpadding="0" cellspacing="0">
            <tr>
                <td colspan="2" class="text-center"><b>ALUMNOS</b></td>
            </tr>
            <tr>
                <td class="text-center" width=80><b>N°</b></td>
                <td width=300 class="text-center"><b>APELLIDOS Y NOMBRES</b></td>
            </tr>
            @if (count($alumnos)>0)
                @foreach ($alumnos as $item)
                <tr>
                    <td width=80 class="text-center">{{$i}}</td>
                    <td width=300 class="text-left">{{$item->alumno}}</td>
                </tr>
                @endforeach
            @endif
        </table>
    </center>    
</body>
</html>