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
    .container 
    {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    .centrartabla{
        margin: auto;
    }
    .blanco
    {
        color :#ffffff;
    }
    .zoscuro
    {
        color: #696969;
    }
</style>
<body>
    @php
        $i = 1;
        $monto = 0;
    @endphp
    @if ($IsConsistent)
    <div class="container">
        <h2 class="text-center"><b>REPORTE DE INGRESOS</b></h2>
        <h4 class="text-center">Desde:{{$zdesde}} Hasta:{{$zhasta}}</h4>
        <hr>
        <table border="1" style="font-size: 13px" class="text-center centrartabla" cellpadding="0" cellspacing="0" >
            <tr class="fondo">
                <td><i class="zoscuro">a</i><b>Número</b><i class="zoscuro">a</i></td>
                <td><b>Alumno</b></td>
                <td><b>Concepto</b></td>
                <td><i class="zoscuro">a</i><b>Comprobante</b><i class="zoscuro">a</i></td>
                <td><i class="zoscuro">a</i><b>Monto</b><i class="zoscuro">a</i></td>
                <td><b>Fecha</b></td>
            </tr>

            @foreach ($ingresos as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td><i class="blanco">aaa</i>{{$item->Alumno}}<i class="blanco">aaa</i></td>
                    <td><i class="blanco">aa</i>{{$item->Concepto}}<i class="blanco">aa</i></td>
                    <td>{{$item->Comprobante}}</td>
                    <td>{{$item->Monto}}</td>
                    <td><i class="blanco">aa</i>{{$item->Fecha}}<i class="blanco">aa</i></td>
                </tr>
                @php
                    $i++;
                    $monto += $item->Monto;
                @endphp
            @endforeach
            <tr>
                <td class="text-right" colspan="4"><b>Total</b></td>
                <td class="text-left" colspan="2"><b>S/ {{number_format($monto,2,".",",")}}</b></td>
            </tr>
        </table>
    </div> 
    @else
        <h1>Fechas no Válidas</h1> 
    @endif
       
</body>
</html>