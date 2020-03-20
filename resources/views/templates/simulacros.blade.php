<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>simulacros</title>
</head>
<style>
    .verticalText {
    writing-mode: vertical-lr;
    transform: rotate(270deg);
    
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
</style>
<body>
    <div class="row">
        <div class="col-md-12">
            {{-- <table border="1" class="text-center" cellpadding="0" cellspacing="0" >
                <tr>
                    <td colspan="2" rowspan="4"><img src="img/logoPRE.png" height="150" width="200" alt=""></td>
                    <td colspan="9" class="amarillo">grado seccion</td>
                    <td  colspan="8" class="celeste">bimestre</td>
                </tr>
                <tr>
                    <td colspan="17">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="17" class="verdeopaco">RESULTADOS GENERALES DEL SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td colspan="17">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO VERBAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ARITMÉTICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ÁLGEBRA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LENGUAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LITERATURA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PLAN LECTOR</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">BIOLOGÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">QUÍMICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">HISTORIA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOGRAFÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PERSONAL SOCIAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PLAN INGLÉS</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PUNTAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CALIFICACIÓN</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ORDEN DE MÉRITO</p></td>
                </tr>
                <tr>
                    <td colspan="2" class="verde">SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>N°</td>
                    <td class="text-left">APELLIDOS Y NOMBRES</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">Salazar Macedo, Antony</td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                
                </tr>
            </table> --}}
            {{-- <table border="1" class="text-center" cellpadding="0" cellspacing="0" >
                <tr>
                    <td colspan="2" rowspan="4"><img src="img/logoPRE.png" height="150" width="200" alt=""></td>
                    <td colspan="10" class="amarillo">grado seccion</td>
                    <td  colspan="9" class="celeste">bimestre</td>
                </tr>
                <tr>
                    <td colspan="19">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="19" class="verdeopaco">RESULTADOS GENERALES DEL SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td colspan="19">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO VERBAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ARITMÉTICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ÁLGEBRA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">TRIGONOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LENGUAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LITERATURA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PLAN LECTOR</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">BIOLOGÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">QUÍMICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">FÍSICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">HISTORIA DEL PERÚ</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOGRAFÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CÍVICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">INGLÉS</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PUNTAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CALIFICACIÓN</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ORDEN DE MÉRITO</p></td>
                </tr>
                <tr>
                    <td colspan="2" class="verde">SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td>N°</td>
                    <td class="text-left">APELLIDOS Y NOMBRES</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">Salazar Macedo, Antony</td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                </tr>
            </table> --}}
            <table border="1" class="text-center" cellpadding="0" cellspacing="0" >
                <tr>
                    <td colspan="2" rowspan="4"><img src="img/logoPRE.png" height="150" width="200" alt=""></td>
                    <td colspan="10" class="amarillo">grado seccion</td>
                    <td  colspan="10" class="celeste">bimestre</td>
                </tr>
                <tr>
                    <td colspan="20">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="20" class="verde">RESULTADOS GENERALES DEL SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td rowspan="4" class="verticalText"><p class="verticalText">RAZONAMIENTO VERBAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">RAZONAMIENTO MATEMÁTICO</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ARITMÉTICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ÁLGEBRA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">TRIGONOMETRÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LENGUAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">LITERATURA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PLAN LECTOR</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">BIOLOGÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">QUÍMICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">FÍSICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">HISTORIA DEL PERÚ</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">HISTORIA UNIVERSAL</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">GEOGRAFÍA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CÍVICA</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">INGLÉS</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">PUNTAJE</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">CALIFICACIÓN</p></td>
                    <td rowspan="4" class="verticalText "><p class="verticalText">ORDEN DE MÉRITO</p></td>
                </tr>
                <tr>
                    <td colspan="2" class="verde">SIMULACRO N° {{"1"}}</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                    <td class="fondo">N°</td>
                    <td class="text-left fondo">APELLIDOS Y NOMBRES</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td class="text-left">Salazar Macedo, Antony</td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                    <td><input type="text" size="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>