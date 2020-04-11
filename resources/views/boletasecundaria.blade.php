<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boleta de notas</title>
</head>
<style>
    .verticalText {
    writing-mode: vertical-lr;
    transform: rotate(270deg);
    }
    .fondo{
        background-color: #adb5bd
    }
    html { 
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -ms-overflow-style: scrollbar;
    -webkit-tap-highlight-color: transparent;
    }

    @-ms-viewport {
    width: device-width;
    }


    body {
    margin: 0;
    font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #ffffff;
    }

    @media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
    }

    @media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
    }

    @media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
    }
    /* 
    .container-fluid {
    width: 100%;
    padding-right: 7.5px;
    padding-left: 7.5px;
    margin-right: auto;
    margin-left: auto;
    } */

    .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin-right: -7.5px;
    margin-left: -7.5px;
    }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 7.5px;
    padding-left: 7.5px;
    }

    .col {
    -ms-flex-preferred-size: 0;
        flex-basis: 0;
    -webkit-box-flex: 1;
        -ms-flex-positive: 1;
            flex-grow: 1;
    max-width: 100%;
    }

    .col-auto {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
            flex: 0 0 auto;
    width: auto;
    max-width: none;
    }

    .col-1 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
    max-width: 8.333333%;
    }

    .col-2 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
    max-width: 16.666667%;
    }

    .col-3 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
            flex: 0 0 25%;
    max-width: 25%;
    }

    .col-4 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
    max-width: 33.333333%;
    }

    .col-5 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
    max-width: 41.666667%;
    }

    .col-6 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
            flex: 0 0 50%;
    max-width: 50%;
    }

    .col-7 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
    max-width: 58.333333%;
    }

    .col-8 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
    max-width: 66.666667%;
    }

    .col-9 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
            flex: 0 0 75%;
    max-width: 75%;
    }

    .col-10 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
    max-width: 83.333333%;
    }

    .col-11 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
    max-width: 91.666667%;
    }

    .col-12 {
    -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
            flex: 0 0 100%;
    max-width: 100%;
    }




    .container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }

    @media (min-width: 576px) {
    .container {
        max-width: 540px;
    }
    }

    @media (min-width: 768px) {
    .container {
        max-width: 720px;
    }
    }

    @media (min-width: 992px) {
    .container {
        max-width: 960px;
    }
    }

    @media (min-width: 1200px) {
    .container {
        max-width: 1140px;
    }
    }

    .container-fluid {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    }

    .row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    }


    .text-justify {
    text-align: justify !important;
    }

    .text-nowrap {
    white-space: nowrap !important;
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


    .text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
    }


    @media print {
    *,
    *::before,
    *::after {
        text-shadow: none !important;
        -webkit-box-shadow: none !important;
                box-shadow: none !important;
    }

    a:not(.btn) {
        text-decoration: underline;
    }

    abbr[title]::after {
        content: " (" attr(title) ")";
    }

    pre {
        white-space: pre-wrap !important;
    }

    pre,
    blockquote {
        border: 1px solid #adb5bd;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }

    @page {
        size: a3;
    }

    body {
        min-width: 992px !important;
    }

    .container {
        min-width: 992px !important;
    }

    .navbar {
        display: none;
    }

    .badge {
        border: 1px solid #000;
    }

    }

    /*!
    *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
    *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
    */

    /* FONT PATH
    * -------------------------- */

</style>
<body>
    @php
        function promedio($elements)
    {
        $acum = 0;
        $cont = 0;
        foreach ($elements as $key) {
            if($key != '') 
            {
                $acum += $key;
                $cont += 1;
            } 
        }
        
        $prom = ($acum != 0) ? ROUND($acum/$cont): '';
        return $prom;
    }
        $Anio = date("Y");
        //aritmetica
            $b1[1][1] = isset($notasb1[1][1]) ? $notasb1[1][1] : "";
            $b1[1][2] = isset($notasb1[1][2]) ? $notasb1[1][2] : "";
            $b1[1][3] = isset($notasb1[1][3]) ? $notasb1[1][3] : "";
            $b1[1][4] = isset($notasb1[1][4]) ? $notasb1[1][4] : "";
            
            $aritmetica1 = promedio(array($b1[1][1],$b1[1][2],$b1[1][3],$b1[1][4]));
            $b2[1][1] = isset($notasb2[1][1]) ? $notasb2[1][1] : "";
            $b2[1][2] = isset($notasb2[1][2]) ? $notasb2[1][2] : "";
            $b2[1][3] = isset($notasb2[1][3]) ? $notasb2[1][3] : "";
            $b2[1][4] = isset($notasb2[1][4]) ? $notasb2[1][4] : "";
            $aritmetica2 = promedio(array($b2[1][1],$b2[1][2],$b2[1][3],$b2[1][4]));

            $b3[1][1] = isset($notasb3[1][1]) ? $notasb3[1][1] : "";
            $b3[1][2] = isset($notasb3[1][2]) ? $notasb3[1][2] : "";
            $b3[1][3] = isset($notasb3[1][3]) ? $notasb3[1][3] : "";
            $b3[1][4] = isset($notasb3[1][4]) ? $notasb3[1][4] : "";
            $aritmetica3 = promedio(array($b3[1][1],$b3[1][2],$b3[1][3],$b3[1][4]));

            $b4[1][1] = isset($notasb4[1][1]) ? $notasb4[1][1] : "";
            $b4[1][2] = isset($notasb4[1][2]) ? $notasb4[1][2] : "";
            $b4[1][3] = isset($notasb4[1][3]) ? $notasb4[1][3] : "";
            $b4[1][4] = isset($notasb4[1][4]) ? $notasb4[1][4] : "";
            $aritmetica4 = promedio(array($b4[1][1],$b4[1][2],$b4[1][3],$b4[1][4]));
            $aritmeticaProm = promedio(array($aritmetica1,$aritmetica2,$aritmetica3,$aritmetica4));
        //algebra
            $b1[2][1] = isset($notasb1[2][1]) ? $notasb1[2][1] : "";
            $b1[2][2] = isset($notasb1[2][2]) ? $notasb1[2][2] : "";
            $b1[2][3] = isset($notasb1[2][3]) ? $notasb1[2][3] : "";
            $b1[2][4] = isset($notasb1[2][4]) ? $notasb1[2][4] : "";
            $algebra1 = promedio(array($b1[2][1],$b1[2][2],$b1[2][3],$b1[2][4]));

            $b2[2][1] = isset($notasb2[2][1]) ? $notasb2[2][1] : "";
            $b2[2][2] = isset($notasb2[2][2]) ? $notasb2[2][2] : "";
            $b2[2][3] = isset($notasb2[2][3]) ? $notasb2[2][3] : "";
            $b2[2][4] = isset($notasb2[2][4]) ? $notasb2[2][4] : "";
            $algebra2 = promedio(array($b2[2][1],$b2[2][2],$b2[2][3],$b2[2][4]));

            $b3[2][1] = isset($notasb3[2][1]) ? $notasb3[2][1] : "";
            $b3[2][2] = isset($notasb3[2][2]) ? $notasb3[2][2] : "";
            $b3[2][3] = isset($notasb3[2][3]) ? $notasb3[2][3] : "";
            $b3[2][4] = isset($notasb3[2][4]) ? $notasb3[2][4] : "";
            $algebra3 = promedio(array($b3[2][1],$b3[2][2],$b3[2][3],$b3[2][4]));
      
            $b4[2][1] = isset($notasb4[2][1]) ? $notasb4[2][1] : "";
            $b4[2][2] = isset($notasb4[2][2]) ? $notasb4[2][2] : "";
            $b4[2][3] = isset($notasb4[2][3]) ? $notasb4[2][3] : "";
            $b4[2][4] = isset($notasb4[2][4]) ? $notasb4[2][4] : "";
            $algebra4 = promedio(array($b4[2][1],$b4[2][2],$b4[2][3],$b4[2][4]));
            $algebraProm = promedio(array($algebra1,$algebra2,$algebra3,$algebra4));
        //geometria
            $b1[3][1] = isset($notasb1[3][1]) ? $notasb1[3][1] : "";
            $b1[3][2] = isset($notasb1[3][2]) ? $notasb1[3][2] : "";
            $b1[3][3] = isset($notasb1[3][3]) ? $notasb1[3][3] : "";
            $b1[3][4] = isset($notasb1[3][4]) ? $notasb1[3][4] : "";
            $geometria1 = promedio(array($b1[3][1],$b1[3][2],$b1[3][3],$b1[3][4])); 
            
            $b2[3][1] = isset($notasb2[3][1]) ? $notasb2[3][1] : "";
            $b2[3][2] = isset($notasb2[3][2]) ? $notasb2[3][2] : "";
            $b2[3][3] = isset($notasb2[3][3]) ? $notasb2[3][3] : "";
            $b2[3][4] = isset($notasb2[3][4]) ? $notasb2[3][4] : "";
            $geometria2 = promedio(array($b2[3][1],$b2[3][2],$b2[3][3],$b2[3][4])); 

            $b3[3][1] = isset($notasb3[3][1]) ? $notasb3[3][1] : "";
            $b3[3][2] = isset($notasb3[3][2]) ? $notasb3[3][2] : "";
            $b3[3][3] = isset($notasb3[3][3]) ? $notasb3[3][3] : "";
            $b3[3][4] = isset($notasb3[3][4]) ? $notasb3[3][4] : "";
            $geometria3 = promedio(array($b3[3][1],$b3[3][2],$b3[3][3],$b3[3][4])); 

            $b4[3][1] = isset($notasb4[3][1]) ? $notasb4[3][1] : "";
            $b4[3][2] = isset($notasb4[3][2]) ? $notasb4[3][2] : "";
            $b4[3][3] = isset($notasb4[3][3]) ? $notasb4[3][3] : "";
            $b4[3][4] = isset($notasb4[3][4]) ? $notasb4[3][4] : "";
            $geometria4 = promedio(array($b4[3][1],$b4[3][2],$b4[3][3],$b4[3][4])); 
            $geometriaProm = promedio(array($geometria1,$geometria2,$geometria3,$geometria4));
        //trigonometria
            $b1[4][1] = isset($notasb1[4][1]) ? $notasb1[4][1] : "";
            $b1[4][2] = isset($notasb1[4][2]) ? $notasb1[4][2] : "";
            $b1[4][3] = isset($notasb1[4][3]) ? $notasb1[4][3] : "";
            $b1[4][4] = isset($notasb1[4][4]) ? $notasb1[4][4] : "";
            $trigonometria1 = promedio(array($b1[4][1],$b1[4][2],$b1[4][3],$b1[4][4])); 

            $b2[4][1] = isset($notasb2[4][1]) ? $notasb2[4][1] : "";
            $b2[4][2] = isset($notasb2[4][2]) ? $notasb2[4][2] : "";
            $b2[4][3] = isset($notasb2[4][3]) ? $notasb2[4][3] : "";
            $b2[4][4] = isset($notasb2[4][4]) ? $notasb2[4][4] : "";
            $trigonometria2 = promedio(array($b2[4][1],$b2[4][2],$b2[4][3],$b2[4][4])); 

            $b3[4][1] = isset($notasb3[4][1]) ? $notasb3[4][1] : "";
            $b3[4][2] = isset($notasb3[4][2]) ? $notasb3[4][2] : "";
            $b3[4][3] = isset($notasb3[4][3]) ? $notasb3[4][3] : "";
            $b3[4][4] = isset($notasb3[4][4]) ? $notasb3[4][4] : "";
            $trigonometria3 = promedio(array($b3[4][1],$b3[4][2],$b3[4][3],$b3[4][4])); 

            $b4[4][1] = isset($notasb4[4][1]) ? $notasb4[4][1] : "";
            $b4[4][2] = isset($notasb4[4][2]) ? $notasb4[4][2] : "";
            $b4[4][3] = isset($notasb4[4][3]) ? $notasb4[4][3] : "";
            $b4[4][4] = isset($notasb4[4][4]) ? $notasb1[4][4] : "";
            $trigonometria4 = promedio(array($b4[4][1],$b4[4][2],$b4[4][3],$b4[4][4])); 
            $trigonometriaProm = promedio(array($trigonometria1,$trigonometria2,$trigonometria3,$trigonometria4)); 
        //rm
            $b1[5][1] = isset($notasb1[5][1]) ? $notasb1[5][1] : "";
            $b1[5][2] = isset($notasb1[5][2]) ? $notasb1[5][2] : "";
            $b1[5][3] = isset($notasb1[5][3]) ? $notasb1[5][3] : "";
            $b1[5][4] = isset($notasb1[5][4]) ? $notasb1[5][4] : ""; 
            $rm1 = promedio(array($b1[5][1],$b1[5][2],$b1[5][3],$b1[5][4])); 

            $b2[5][1] = isset($notasb2[5][1]) ? $notasb2[5][1] : "";
            $b2[5][2] = isset($notasb2[5][2]) ? $notasb2[5][2] : "";
            $b2[5][3] = isset($notasb2[5][3]) ? $notasb2[5][3] : "";
            $b2[5][4] = isset($notasb2[5][4]) ? $notasb2[5][4] : "";
            $rm2 = promedio(array($b2[5][1],$b2[5][2],$b2[5][3],$b2[5][4])); 

            $b3[5][1] = isset($notasb3[5][1]) ? $notasb3[5][1] : "";
            $b3[5][2] = isset($notasb3[5][2]) ? $notasb3[5][2] : "";
            $b3[5][3] = isset($notasb3[5][3]) ? $notasb3[5][3] : "";
            $b3[5][4] = isset($notasb3[5][4]) ? $notasb3[5][4] : "";
            $rm3 = promedio(array($b3[5][1],$b3[5][2],$b3[5][3],$b3[5][4])); 
            
            $b4[5][1] = isset($notasb4[5][1]) ? $notasb4[5][1] : "";
            $b4[5][2] = isset($notasb4[5][2]) ? $notasb4[5][2] : "";
            $b4[5][3] = isset($notasb4[5][3]) ? $notasb4[5][3] : "";
            $b4[5][4] = isset($notasb4[5][4]) ? $notasb4[5][4] : "";
            $rm4 = promedio(array($b4[5][1],$b4[5][2],$b4[5][3],$b4[5][4])); 
            $rmProm = promedio(array($rm1,$rm2,$rm3,$rm4)); 
            $mateProm = promedio(array($aritmeticaProm,$algebraProm,$geometriaProm,$trigonometriaProm,$rmProm));
        //rv
            $b1[6][1] = isset($notasb1[6][1]) ? $notasb1[6][1] : "";
            $b1[6][2] = isset($notasb1[6][2]) ? $notasb1[6][2] : "";
            $b1[6][3] = isset($notasb1[6][3]) ? $notasb1[6][3] : "";
            $b1[6][4] = isset($notasb1[6][4]) ? $notasb1[6][4] : "";
            $rv1 = promedio(array($b1[6][1],$b1[6][2],$b1[6][3],$b1[6][4])); 

            $b2[6][1] = isset($notasb2[6][1]) ? $notasb2[6][1] : "";
            $b2[6][2] = isset($notasb2[6][2]) ? $notasb2[6][2] : "";
            $b2[6][3] = isset($notasb2[6][3]) ? $notasb2[6][3] : "";
            $b2[6][4] = isset($notasb2[6][4]) ? $notasb2[6][4] : "";
            $rv2 = promedio(array($b2[6][1],$b2[6][2],$b2[6][3],$b2[6][4])); 

            $b3[6][1] = isset($notasb3[6][1]) ? $notasb3[6][1] : "";
            $b3[6][2] = isset($notasb3[6][2]) ? $notasb3[6][2] : "";
            $b3[6][3] = isset($notasb3[6][3]) ? $notasb3[6][3] : "";
            $b3[6][4] = isset($notasb3[6][4]) ? $notasb3[6][4] : "";
            $rv3 = promedio(array($b3[6][1],$b3[6][2],$b3[6][3],$b3[6][4])); 

            $b4[6][1] = isset($notasb4[6][1]) ? $notasb4[6][1] : "";
            $b4[6][2] = isset($notasb4[6][2]) ? $notasb4[6][2] : "";
            $b4[6][3] = isset($notasb4[6][3]) ? $notasb4[6][3] : "";
            $b4[6][4] = isset($notasb4[6][4]) ? $notasb4[6][4] : "";
            $rv4 = promedio(array($b4[6][1],$b4[6][2],$b4[6][3],$b4[6][4])); 
            $rvProm = promedio(array($rv1,$rv2,$rv3,$rv4)); 
        //planlector
            $b1[7][1] = isset($notasb1[7][1]) ? $notasb1[7][1] : "";
            $b1[7][2] = isset($notasb1[7][2]) ? $notasb1[7][2] : "";
            $b1[7][3] = isset($notasb1[7][3]) ? $notasb1[7][3] : "";
            $b1[7][4] = isset($notasb1[7][4]) ? $notasb1[7][4] : "";
            $pl1 = promedio(array($b1[7][1],$b1[7][2],$b1[7][3],$b1[7][4])); 

            $b2[7][1] = isset($notasb2[7][1]) ? $notasb2[7][1] : "";
            $b2[7][2] = isset($notasb2[7][2]) ? $notasb2[7][2] : "";
            $b2[7][3] = isset($notasb2[7][3]) ? $notasb2[7][3] : "";
            $b2[7][4] = isset($notasb2[7][4]) ? $notasb2[7][4] : "";
            $pl2 = promedio(array($b2[7][1],$b2[7][2],$b2[7][3],$b2[7][4])); 

            $b3[7][1] = isset($notasb3[7][1]) ? $notasb3[7][1] : "";
            $b3[7][2] = isset($notasb3[7][2]) ? $notasb3[7][2] : "";
            $b3[7][3] = isset($notasb3[7][3]) ? $notasb3[7][3] : "";
            $b3[7][4] = isset($notasb3[7][4]) ? $notasb3[7][4] : "";
            $pl3 = promedio(array($b3[7][1],$b3[7][2],$b3[7][3],$b3[7][4])); 

            $b4[7][1] = isset($notasb4[7][1]) ? $notasb4[7][1] : "";
            $b4[7][2] = isset($notasb4[7][2]) ? $notasb4[7][2] : "";
            $b4[7][3] = isset($notasb4[7][3]) ? $notasb4[7][3] : "";
            $b4[7][4] = isset($notasb4[7][4]) ? $notasb4[7][4] : "";
            $pl4 = promedio(array($b4[7][1],$b4[7][2],$b4[7][3],$b4[7][4])); 
            $plProm = promedio(array($pl1,$pl2,$pl3,$pl4)); 
        //lenguaje
            $b1[8][1] = isset($notasb1[8][1]) ? $notasb1[8][1] : "";
            $b1[8][2] = isset($notasb1[8][2]) ? $notasb1[8][2] : "";
            $b1[8][3] = isset($notasb1[8][3]) ? $notasb1[8][3] : "";
            $b1[8][4] = isset($notasb1[8][4]) ? $notasb1[8][4] : "";
            $lenguaje1 = promedio(array($b1[8][1],$b1[8][2],$b1[8][3],$b1[8][4])); 

            $b2[8][1] = isset($notasb2[8][1]) ? $notasb2[8][1] : "";
            $b2[8][2] = isset($notasb2[8][2]) ? $notasb2[8][2] : "";
            $b2[8][3] = isset($notasb2[8][3]) ? $notasb2[8][3] : "";
            $b2[8][4] = isset($notasb2[8][4]) ? $notasb2[8][4] : "";
            $lenguaje2 = promedio(array($b2[8][1],$b2[8][2],$b2[8][3],$b2[8][4])); 

            $b3[8][1] = isset($notasb3[8][1]) ? $notasb3[8][1] : "";
            $b3[8][2] = isset($notasb3[8][2]) ? $notasb3[8][2] : "";
            $b3[8][3] = isset($notasb3[8][3]) ? $notasb3[8][3] : "";
            $b3[8][4] = isset($notasb3[8][4]) ? $notasb3[8][4] : "";
            $lenguaje3 = promedio(array($b3[8][1],$b3[8][2],$b3[8][3],$b3[8][4])); 

            $b4[8][1] = isset($notasb4[8][1]) ? $notasb4[8][1] : "";
            $b4[8][2] = isset($notasb4[8][2]) ? $notasb4[8][2] : "";
            $b4[8][3] = isset($notasb4[8][3]) ? $notasb4[8][3] : "";
            $b4[8][4] = isset($notasb4[8][4]) ? $notasb4[8][4] : "";
            $lenguaje4 = promedio(array($b4[8][1],$b4[8][2],$b4[8][3],$b4[8][4])); 
            $lenguajeProm = promedio(array($lenguaje1,$lenguaje2,$lenguaje3,$lenguaje4)); 
        //literatura
            $b1[9][1] = isset($notasb1[9][1]) ? $notasb1[9][1] : "";
            $b1[9][2] = isset($notasb1[9][2]) ? $notasb1[9][2] : "";
            $b1[9][3] = isset($notasb1[9][3]) ? $notasb1[9][3] : "";
            $b1[9][4] = isset($notasb1[9][4]) ? $notasb1[9][4] : "";
            $literatura1 = promedio(array($b1[9][1],$b1[9][2],$b1[9][3],$b1[9][4])); 

            $b2[9][1] = isset($notasb2[9][1]) ? $notasb2[9][1] : "";
            $b2[9][2] = isset($notasb2[9][2]) ? $notasb2[9][2] : "";
            $b2[9][3] = isset($notasb2[9][3]) ? $notasb2[9][3] : "";
            $b2[9][4] = isset($notasb2[9][4]) ? $notasb2[9][4] : "";
            $literatura2 = promedio(array($b2[9][1],$b2[9][2],$b2[9][3],$b2[9][4])); 

            $b3[9][1] = isset($notasb3[9][1]) ? $notasb3[9][1] : "";
            $b3[9][2] = isset($notasb3[9][2]) ? $notasb3[9][2] : "";
            $b3[9][3] = isset($notasb3[9][3]) ? $notasb3[9][3] : "";
            $b3[9][4] = isset($notasb3[9][4]) ? $notasb3[9][4] : "";
            $literatura3 = promedio(array($b3[9][1],$b3[9][2],$b3[9][3],$b3[9][4])); 

            $b4[9][1] = isset($notasb4[9][1]) ? $notasb4[9][1] : "";
            $b4[9][2] = isset($notasb4[9][2]) ? $notasb4[9][2] : "";
            $b4[9][3] = isset($notasb4[9][3]) ? $notasb4[9][3] : "";
            $b4[9][4] = isset($notasb4[9][4]) ? $notasb4[9][4] : "";
            $literatura4 = promedio(array($b4[9][1],$b4[9][2],$b4[9][3],$b4[9][4])); 
            $literaturaProm = promedio(array($literatura1,$literatura2,$literatura3,$literatura4)); 
            $comunicacionProm = promedio(array($rvProm,$literaturaProm,$lenguajeProm,$plProm));
        //ingles
            $b1[10][1] = isset($notasb1[10][1]) ? $notasb1[10][1] : "";
            $b1[10][2] = isset($notasb1[10][2]) ? $notasb1[10][2] : "";
            $b1[10][3] = isset($notasb1[10][3]) ? $notasb1[10][3] : "";
            $b1[10][4] = isset($notasb1[10][4]) ? $notasb1[10][4] : "";
            $ingles1   = promedio(array($b1[10][1],$b1[10][2],$b1[10][3],$b1[10][4])); 

            $b2[10][1] = isset($notasb2[10][1]) ? $notasb2[10][1] : "";
            $b2[10][2] = isset($notasb2[10][2]) ? $notasb2[10][2] : "";
            $b2[10][3] = isset($notasb2[10][3]) ? $notasb2[10][3] : "";
            $b2[10][4] = isset($notasb2[10][4]) ? $notasb2[10][4] : "";
            $ingles2   = promedio(array($b2[10][1],$b2[10][2],$b2[10][3],$b2[10][4])); 

            $b3[10][1] = isset($notasb3[10][1]) ? $notasb3[10][1] : "";
            $b3[10][2] = isset($notasb3[10][2]) ? $notasb3[10][2] : "";
            $b3[10][3] = isset($notasb3[10][3]) ? $notasb3[10][3] : "";
            $b3[10][4] = isset($notasb3[10][4]) ? $notasb3[10][4] : "";
            $ingles3   = promedio(array($b3[10][1],$b3[10][2],$b3[10][3],$b3[10][4])); 

            $b4[10][1] = isset($notasb4[10][1]) ? $notasb4[10][1] : "";
            $b4[10][2] = isset($notasb4[10][2]) ? $notasb4[10][2] : "";
            $b4[10][3] = isset($notasb4[10][3]) ? $notasb4[10][3] : "";
            $b4[10][4] = isset($notasb4[10][4]) ? $notasb4[10][4] : "";
            $ingles4   = promedio(array($b4[10][1],$b4[10][2],$b4[10][3],$b4[10][4])); 
            $inglesProm   = promedio(array($ingles1,$ingles2,$ingles3,$ingles4)); 
        //arte
            $b1[11][1] = isset($notasb1[11][1]) ? $notasb1[11][1] : "";
            $b1[11][2] = isset($notasb1[11][2]) ? $notasb1[11][2] : "";
            $arte1     = promedio(array($b1[11][1],$b1[11][2])); 

            $b2[11][1] = isset($notasb2[11][1]) ? $notasb2[11][1] : "";
            $b2[11][2] = isset($notasb2[11][2]) ? $notasb2[11][2] : "";
            $arte2     = promedio(array($b2[11][1],$b2[11][2])); 

            $b3[11][1] = isset($notasb3[11][1]) ? $notasb3[11][1] : "";
            $b3[11][2] = isset($notasb3[11][2]) ? $notasb3[11][2] : "";
            $arte3     = promedio(array($b3[11][1],$b3[11][2])); 

            $b4[11][1] = isset($notasb4[11][1]) ? $notasb4[11][1] : "";
            $b4[11][2] = isset($notasb4[11][2]) ? $notasb4[11][2] : "";
            $arte4     = promedio(array($b4[11][1],$b4[11][2])); 
            $arteProm  = promedio(array($arte1,$arte2,$arte3,$arte4)); 
        //historia peru
            $b1[12][1] = isset($notasb1[12][1]) ? $notasb1[12][1] : "";
            $b1[12][2] = isset($notasb1[12][2]) ? $notasb1[12][2] : "";
            $b1[12][3] = isset($notasb1[12][3]) ? $notasb1[12][3] : "";
            $b1[12][4] = isset($notasb1[12][4]) ? $notasb1[12][4] : "";
            $historiap1  = promedio(array($b1[12][1],$b1[12][2],$b1[12][3],$b1[12][4])); 

            $b2[12][1] = isset($notasb2[12][1]) ? $notasb2[12][1] : "";
            $b2[12][2] = isset($notasb2[12][2]) ? $notasb2[12][2] : "";
            $b2[12][3] = isset($notasb2[12][3]) ? $notasb2[12][3] : "";
            $b2[12][4] = isset($notasb2[12][4]) ? $notasb2[12][4] : "";
            $historiap2  = promedio(array($b2[12][1],$b2[12][2],$b2[12][3],$b2[12][4])); 

            $b3[12][1] = isset($notasb3[12][1]) ? $notasb3[12][1] : "";
            $b3[12][2] = isset($notasb3[12][2]) ? $notasb3[12][2] : "";
            $b3[12][3] = isset($notasb3[12][3]) ? $notasb3[12][3] : "";
            $b3[12][4] = isset($notasb3[12][4]) ? $notasb3[12][4] : "";
            $historiap3  = promedio(array($b3[12][1],$b3[12][2],$b3[12][3],$b3[12][4])); 

            $b4[12][1] = isset($notasb4[12][1]) ? $notasb4[12][1] : "";
            $b4[12][2] = isset($notasb4[12][2]) ? $notasb4[12][2] : "";
            $b4[12][3] = isset($notasb4[12][3]) ? $notasb4[12][3] : "";
            $b4[12][4] = isset($notasb4[12][4]) ? $notasb4[12][4] : "";
            $historiap4  = promedio(array($b4[12][1],$b4[12][2],$b4[12][3],$b4[12][4])); 
            $historiapProm  = promedio(array($historiap1,$historiap2,$historiap3,$historiap4)); 
        //historia universal
            $b1[13][1] = isset($notasb1[13][1]) ? $notasb1[13][1] : "";
            $b1[13][2] = isset($notasb1[13][2]) ? $notasb1[13][2] : "";
            $b1[13][3] = isset($notasb1[13][3]) ? $notasb1[13][3] : "";
            $b1[13][4] = isset($notasb1[13][4]) ? $notasb1[13][4] : "";
            $historiau1  = promedio(array($b1[13][1],$b1[13][2],$b1[13][3],$b1[13][4])); 

            $b2[13][1] = isset($notasb2[13][1]) ? $notasb2[13][1] : "";
            $b2[13][2] = isset($notasb2[13][2]) ? $notasb2[13][2] : "";
            $b2[13][3] = isset($notasb2[13][3]) ? $notasb2[13][3] : "";
            $b2[13][4] = isset($notasb2[13][4]) ? $notasb2[13][4] : "";
            $historiau2  = promedio(array($b2[13][1],$b2[13][2],$b2[13][3],$b2[13][4])); 

            $b3[13][1] = isset($notasb3[13][1]) ? $notasb3[13][1] : "";
            $b3[13][2] = isset($notasb3[13][2]) ? $notasb3[13][2] : "";
            $b3[13][3] = isset($notasb3[13][3]) ? $notasb3[13][3] : "";
            $b3[13][4] = isset($notasb3[13][4]) ? $notasb3[13][4] : "";
            $historiau3  = promedio(array($b3[13][1],$b3[13][2],$b3[13][3],$b3[13][4])); 

            $b4[13][1] = isset($notasb4[13][1]) ? $notasb4[13][1] : "";
            $b4[13][2] = isset($notasb4[13][2]) ? $notasb4[13][2] : "";
            $b4[13][3] = isset($notasb4[13][3]) ? $notasb4[13][3] : "";
            $b4[13][4] = isset($notasb4[13][4]) ? $notasb4[13][4] : "";
            $historiau4  = promedio(array($b4[13][1],$b4[13][2],$b4[13][3],$b4[13][4])); 
            $historiauProm  = promedio(array($historiau1,$historiau2,$historiau3,$historiau4)); 
        //geografia
            $b1[14][1] = isset($notasb1[14][1]) ? $notasb1[14][1] : "";
            $b1[14][2] = isset($notasb1[14][2]) ? $notasb1[14][2] : "";
            $b1[14][3] = isset($notasb1[14][3]) ? $notasb1[14][3] : "";
            $b1[14][4] = isset($notasb1[14][4]) ? $notasb1[14][4] : "";
            $geografia1  = promedio(array($b1[14][1],$b1[14][2],$b1[14][3],$b1[14][4])); 

            $b2[14][1] = isset($notasb2[14][1]) ? $notasb2[14][1] : "";
            $b2[14][2] = isset($notasb2[14][2]) ? $notasb2[14][2] : "";
            $b2[14][3] = isset($notasb2[14][3]) ? $notasb2[14][3] : "";
            $b2[14][4] = isset($notasb2[14][4]) ? $notasb2[14][4] : "";
            $geografia2  = promedio(array($b2[14][1],$b2[14][2],$b2[14][3],$b2[14][4])); 

            $b3[14][1] = isset($notasb3[14][1]) ? $notasb3[14][1] : "";
            $b3[14][2] = isset($notasb3[14][2]) ? $notasb3[14][2] : "";
            $b3[14][3] = isset($notasb3[14][3]) ? $notasb3[14][3] : "";
            $b3[14][4] = isset($notasb3[14][4]) ? $notasb3[14][4] : "";
            $geografia3  = promedio(array($b3[14][1],$b3[14][2],$b3[14][3],$b3[14][4])); 

            $b4[14][1] = isset($notasb4[14][1]) ? $notasb4[14][1] : "";
            $b4[14][2] = isset($notasb4[14][2]) ? $notasb4[14][2] : "";
            $b4[14][3] = isset($notasb4[14][3]) ? $notasb4[14][3] : "";
            $b4[14][4] = isset($notasb4[14][4]) ? $notasb4[14][4] : "";
            $geografia4  = promedio(array($b4[14][1],$b4[14][2],$b4[14][3],$b4[14][4])); 
            $geografiaProm  = promedio(array($geografia1,$geografia2,$geografia3,$geografia4)); 
            $socialesProm = promedio(array($historiapProm,$historiauProm,$geografiaProm));
        //civica
            $b1[15][1] = isset($notasb1[15][1]) ? $notasb1[15][1] : "";
            $b1[15][2] = isset($notasb1[15][2]) ? $notasb1[15][2] : "";
            $civica1   = promedio(array($b1[15][1],$b1[15][2])); 

            $b2[15][1] = isset($notasb2[15][1]) ? $notasb2[15][1] : "";
            $b2[15][2] = isset($notasb2[15][2]) ? $notasb2[15][2] : "";
            $civica2   = promedio(array($b2[15][1],$b2[15][2])); 

            $b3[15][1] = isset($notasb3[15][1]) ? $notasb3[15][1] : "";
            $b3[15][2] = isset($notasb3[15][2]) ? $notasb3[15][2] : "";
            $civica3   = promedio(array($b3[15][1],$b3[15][2])); 

            $b4[15][1] = isset($notasb4[15][1]) ? $notasb4[15][1] : "";
            $b4[15][2] = isset($notasb4[15][2]) ? $notasb4[15][2] : "";
            $civica4   = promedio(array($b4[15][1],$b4[15][2])); 
            $civicaProm   = promedio(array($civica1,$civica2,$civica3,$civica4)); 
        //pfrh
            $b1[16][1] = isset($notasb1[16][1]) ? $notasb1[16][1] : "";
            $b1[16][2] = isset($notasb1[16][2]) ? $notasb1[16][2] : "";
            $b1[16][3] = isset($notasb1[16][3]) ? $notasb1[16][3] : "";
            $pfrh1     = promedio(array($b1[16][1],$b1[16][2],$b1[16][3])); 

            $b2[16][1] = isset($notasb2[16][1]) ? $notasb2[16][1] : "";
            $b2[16][2] = isset($notasb2[16][2]) ? $notasb2[16][2] : "";
            $b2[16][3] = isset($notasb2[16][3]) ? $notasb2[16][3] : "";
            $pfrh2     = promedio(array($b2[16][1],$b2[16][2],$b2[16][3])); 

            $b3[16][1] = isset($notasb3[16][1]) ? $notasb3[16][1] : "";
            $b3[16][2] = isset($notasb3[16][2]) ? $notasb3[16][2] : "";
            $b3[16][3] = isset($notasb3[16][3]) ? $notasb3[16][3] : "";
            $pfrh3     = promedio(array($b3[16][1],$b3[16][2],$b3[16][3])); 

            $b4[16][1] = isset($notasb4[16][1]) ? $notasb4[16][1] : "";
            $b4[16][2] = isset($notasb4[16][2]) ? $notasb4[16][2] : "";
            $b4[16][3] = isset($notasb4[16][3]) ? $notasb4[16][3] : "";
            $pfrh4     = promedio(array($b4[16][1],$b4[16][2],$b4[16][3])); 
            $pfrhProm  = promedio(array($pfrh1,$pfrh2,$pfrh3,$pfrh4)); 
        //educ fisica
            $b1[17][1] = isset($notasb1[17][1]) ? $notasb1[17][1] : "";
            $b1[17][2] = isset($notasb1[17][2]) ? $notasb1[17][2] : "";
            $b1[17][3] = isset($notasb1[17][3]) ? $notasb1[17][3] : "";
            $ef1       = promedio(array($b1[17][1],$b1[17][2],$b1[17][3])); 

            $b2[17][1] = isset($notasb2[17][1]) ? $notasb2[17][1] : "";
            $b2[17][2] = isset($notasb2[17][2]) ? $notasb2[17][2] : "";
            $b2[17][3] = isset($notasb2[17][3]) ? $notasb2[17][3] : "";
            $ef2       = promedio(array($b2[17][1],$b2[17][2],$b2[17][3])); 

            $b3[17][1] = isset($notasb3[17][1]) ? $notasb3[17][1] : "";
            $b3[17][2] = isset($notasb3[17][2]) ? $notasb3[17][2] : "";
            $b3[17][3] = isset($notasb3[17][3]) ? $notasb3[17][3] : "";
            $ef3       = promedio(array($b3[17][1],$b3[17][2],$b3[17][3])); 

            $b4[17][1] = isset($notasb4[17][1]) ? $notasb4[17][1] : "";
            $b4[17][2] = isset($notasb4[17][2]) ? $notasb4[17][2] : "";
            $b4[17][3] = isset($notasb4[17][3]) ? $notasb4[17][3] : "";
            $ef4       = promedio(array($b4[17][1],$b4[17][2],$b4[17][3])); 
            $efProm    = promedio(array($ef1,$ef2,$ef3,$ef4)); 
        //educ religiosa
            $b1[18][1] = isset($notasb1[18][1]) ? $notasb1[18][1] : "";
            $b1[18][2] = isset($notasb1[18][2]) ? $notasb1[18][2] : "";
            $er1       = promedio(array($b1[18][1],$b1[18][2])); 

            $b2[18][1] = isset($notasb2[18][1]) ? $notasb2[18][1] : "";
            $b2[18][2] = isset($notasb2[18][2]) ? $notasb2[18][2] : "";
            $er2       = promedio(array($b2[18][1],$b2[18][2])); 

            $b3[18][1] = isset($notasb3[18][1]) ? $notasb3[18][1] : "";
            $b3[18][2] = isset($notasb3[18][2]) ? $notasb3[18][2] : "";
            $er3       = promedio(array($b3[18][1],$b3[18][2])); 

            $b4[18][1] = isset($notasb4[18][1]) ? $notasb4[18][1] : "";
            $b4[18][2] = isset($notasb4[18][2]) ? $notasb4[18][2] : "";
            $er4       = promedio(array($b4[18][1],$b4[18][2])); 
            $erProm    = promedio(array($er1,$er2,$er3,$er4)); 
        //fisica
            $b1[19][1] = isset($notasb1[19][1]) ? $notasb1[19][1] : "";
            $b1[19][2] = isset($notasb1[19][2]) ? $notasb1[19][2] : "";
            $b1[19][3] = isset($notasb1[19][3]) ? $notasb1[19][3] : "";
            $b1[19][4] = isset($notasb1[19][4]) ? $notasb1[19][4] : "";
            $fisica1   = promedio(array($b1[19][1],$b1[19][2],$b1[19][3],$b1[19][4])); 

            $b2[19][1] = isset($notasb2[19][1]) ? $notasb2[19][1] : "";
            $b2[19][2] = isset($notasb2[19][2]) ? $notasb2[19][2] : "";
            $b2[19][3] = isset($notasb2[19][3]) ? $notasb2[19][3] : "";
            $b2[19][4] = isset($notasb2[19][4]) ? $notasb2[19][4] : "";
            $fisica2   = promedio(array($b2[19][1],$b2[19][2],$b2[19][3],$b2[19][4])); 

            $b3[19][1] = isset($notasb3[19][1]) ? $notasb3[19][1] : "";
            $b3[19][2] = isset($notasb3[19][2]) ? $notasb3[19][2] : "";
            $b3[19][3] = isset($notasb3[19][3]) ? $notasb3[19][3] : "";
            $b3[19][4] = isset($notasb3[19][4]) ? $notasb3[19][4] : "";
            $fisica3   = promedio(array($b3[19][1],$b3[19][2],$b3[19][3],$b3[19][4])); 

            $b4[19][1] = isset($notasb4[19][1]) ? $notasb4[19][1] : "";
            $b4[19][2] = isset($notasb4[19][2]) ? $notasb4[19][2] : "";
            $b4[19][3] = isset($notasb4[19][3]) ? $notasb4[19][3] : "";
            $b4[19][4] = isset($notasb4[19][4]) ? $notasb4[19][4] : "";
            $fisica4   = promedio(array($b4[19][1],$b4[19][2],$b4[19][3],$b4[19][4])); 
            $fisicaProm   = promedio(array($fisica1,$fisica2,$fisica3,$fisica4)); 
        //quimica
            $b1[20][1] = isset($notasb1[20][1]) ? $notasb1[20][1] : "";
            $b1[20][2] = isset($notasb1[20][2]) ? $notasb1[20][2] : "";
            $b1[20][3] = isset($notasb1[20][3]) ? $notasb1[20][3] : "";
            $b1[20][4] = isset($notasb1[20][4]) ? $notasb1[20][4] : "";
            $quimica1  = promedio(array($b1[20][1],$b1[20][2],$b1[20][3],$b1[20][4])); 

            $b2[20][1] = isset($notasb2[20][1]) ? $notasb2[20][1] : "";
            $b2[20][2] = isset($notasb2[20][2]) ? $notasb2[20][2] : "";
            $b2[20][3] = isset($notasb2[20][3]) ? $notasb2[20][3] : "";
            $b2[20][4] = isset($notasb2[20][4]) ? $notasb2[20][4] : "";
            $quimica2  = promedio(array($b2[20][1],$b2[20][2],$b2[20][3],$b2[20][4])); 

            $b3[20][1] = isset($notasb3[20][1]) ? $notasb3[20][1] : "";
            $b3[20][2] = isset($notasb3[20][2]) ? $notasb3[20][2] : "";
            $b3[20][3] = isset($notasb3[20][3]) ? $notasb3[20][3] : "";
            $b3[20][4] = isset($notasb3[20][4]) ? $notasb3[20][4] : "";
            $quimica3  = promedio(array($b3[20][1],$b3[20][2],$b3[20][3],$b3[20][4])); 

            $b4[20][1] = isset($notasb4[20][1]) ? $notasb4[20][1] : "";
            $b4[20][2] = isset($notasb4[20][2]) ? $notasb4[20][2] : "";
            $b4[20][3] = isset($notasb4[20][3]) ? $notasb4[20][3] : "";
            $b4[20][4] = isset($notasb4[20][4]) ? $notasb4[20][4] : "";
            $quimica4  = promedio(array($b4[20][1],$b4[20][2],$b4[20][3],$b4[20][4])); 
            $quimicaProm  = promedio(array($b1[20][1],$b1[20][2],$b1[20][3],$b1[20][4])); 
        //biologia
            $b1[21][1] = isset($notasb1[21][1]) ? $notasb1[21][1] : "";
            $b1[21][2] = isset($notasb1[21][2]) ? $notasb1[21][2] : "";
            $b1[21][3] = isset($notasb1[21][3]) ? $notasb1[21][3] : "";
            $b1[21][4] = isset($notasb1[21][4]) ? $notasb1[21][4] : "";
            $biologia1 = promedio(array($b1[21][1],$b1[21][2],$b1[21][3],$b1[21][4])); 

            $b2[21][1] = isset($notasb2[21][1]) ? $notasb2[21][1] : "";
            $b2[21][2] = isset($notasb2[21][2]) ? $notasb2[21][2] : "";
            $b2[21][3] = isset($notasb2[21][3]) ? $notasb2[21][3] : "";
            $b2[21][4] = isset($notasb2[21][4]) ? $notasb2[21][4] : "";
            $biologia2 = promedio(array($b2[21][1],$b2[21][2],$b2[21][3],$b2[21][4])); 

            $b3[21][1] = isset($notasb3[21][1]) ? $notasb3[21][1] : "";
            $b3[21][2] = isset($notasb3[21][2]) ? $notasb3[21][2] : "";
            $b3[21][3] = isset($notasb3[21][3]) ? $notasb3[21][3] : "";
            $b3[21][4] = isset($notasb3[21][4]) ? $notasb3[21][4] : "";
            $biologia3 = promedio(array($b3[21][1],$b3[21][2],$b3[21][3],$b3[21][4])); 

            $b4[21][1] = isset($notasb4[21][1]) ? $notasb4[21][1] : "";
            $b4[21][2] = isset($notasb4[21][2]) ? $notasb4[21][2] : "";
            $b4[21][3] = isset($notasb4[21][3]) ? $notasb4[21][3] : "";
            $b4[21][4] = isset($notasb4[21][4]) ? $notasb4[21][4] : "";
            $biologia4 = promedio(array($b4[21][1],$b4[21][2],$b4[21][3],$b4[21][4])); 
            $biologiaProm = promedio(array($biologia1,$biologia2,$biologia3,$biologia4)); 
            $cienciasProm = promedio(array($biologiaProm,$fisicaProm,$quimicaProm)); 
        //educ para el trabajo
            $b1[22][1] = isset($notasb1[22][1]) ? $notasb1[22][1] : "";
            $b1[22][2] = isset($notasb1[22][2]) ? $notasb1[22][2] : "";
            $b1[22][3] = isset($notasb1[22][3]) ? $notasb1[22][3] : "";
            $ept1      = promedio(array($b1[22][1],$b1[22][2],$b1[22][3])); 

            $b2[22][1] = isset($notasb2[22][1]) ? $notasb2[22][1] : "";
            $b2[22][2] = isset($notasb2[22][2]) ? $notasb2[22][2] : "";
            $b2[22][3] = isset($notasb2[22][3]) ? $notasb2[22][3] : "";
            $ept2      = promedio(array($b2[22][1],$b2[22][2],$b2[22][3])); 

            $b3[22][1] = isset($notasb3[22][1]) ? $notasb3[22][1] : "";
            $b3[22][2] = isset($notasb3[22][2]) ? $notasb3[22][2] : "";
            $b3[22][3] = isset($notasb3[22][3]) ? $notasb3[22][3] : "";
            $ept3      = promedio(array($b3[22][1],$b3[22][2],$b3[22][3])); 

            $b4[22][1] = isset($notasb4[22][1]) ? $notasb4[22][1] : "";
            $b4[22][2] = isset($notasb4[22][2]) ? $notasb4[22][2] : "";
            $b4[22][3] = isset($notasb4[22][3]) ? $notasb4[22][3] : "";
            $ept4      = promedio(array($b4[22][1],$b4[22][2],$b4[22][3])); 
            $eptProm   = promedio(array($ept1,$ept2,$ept3,$ept4)); 
    @endphp
    <div class="container-fluid">
        <div class="row">
            <table class="text-center">
                <tr>
                    <td width="30" rowspan="2">&nbsp;</td>
                    <td rowspan="2"><img src="img/escudo.png" height="100" width="100" alt="" srcset=""></td>
                    <td width="110"><b>BOLETA DE INFORMACIÓN {{$Anio}}</b></td>
                    <td rowspan="2"><img src="img/logo1.png" height="100" width="100" alt="" srcset=""></td>
                </tr>
                <tr>
                    <td>
                        <table border="1" cellpadding="0" cellspacing="0" style="font-size: 10px;">
                            <tr>
                                <td width="30" style="background-color: #adb5bd"><b>DRE: </b></td>
                                <td class="text-left"><small style="color:white">a</small><b>UCAYALI</b></td>
                                <td style="background-color: #adb5bd"><b>CÓDIGO: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>N° 1693225</b></td>
                            </tr>
                            <tr>
                                <td style="background-color: #adb5bd"><b>I.E.P: </b></td>
                                <td colspan="3"><b> PERSEVERANCIA, RESPONSABILIDAD Y EDUCACIÓN (LA PRE)</b><small style="color:white">aaaaaaaaaa</small></td>
                            </tr>
                            <tr>
                                <td rowspan="2" style="background-color: #adb5bd"><b>NIVEL: </b></td>
                                <td rowspan="2"><b>
                                    @if (isset($dato->Nivel))
                                        {{$dato->Nivel}}
                                    @endif
                                    </b>
                                </td>
                                <td style="background-color: #adb5bd"><b>GRADO: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->grado))
                                        {{$dato->grado}}
                                    @endif
                                </b></td>
                            </tr> 
                            <tr>
                                <td style="background-color: #adb5bd"><b>SECCIÓN: </b></td>
                                <td class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->seccion))
                                        {{$dato->seccion}}
                                    @endif
                                </b></td>
                            </tr>
                            <tr class="text-left">
                                <td colspan="2"  style="background-color: #adb5bd"><b>Código del Estudiante: </b></td>
                                <td colspan="2" class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->DNI))
                                        {{$dato->DNI}}
                                    @endif
                                </b></td>
                            </tr>
                            <tr class="text-left">
                                <td colspan="2"  style="background-color: #adb5bd"><b>Apellidos y Nombres: </b></td>
                                <td colspan="2" class="text-left"><b><small style="color:white">a</small>
                                    @if (isset($dato->alumno))
                                        {{$dato->alumno}}
                                    @endif
                                </b></td>
                            </tr>        
                        </table>
                    </td>
                </tr>
            </table>
        </div>
       <div class="row">
           &nbsp;
       </div>
        <div class="row">
            <table border="1" cellpadding="0" cellspacing="0" class="text-center" style="font-size: 9px">
                <tr>
                    <td rowspan="2" colspan="2" width="90" style="background-color: #adb5bd"><b>AREA</b></td>
                    <td rowspan="2" width="160" class="fondo"><b>LOGROS DE APRENDIZAJE</b></td>
                    <td colspan="4" width="70" class="fondo"><b>BIMESTRE</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>PROM.<br>PARCIAL.</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>PROM.<br>FINAL.</b></td>
                    <td rowspan="2" width="30" class="fondo" style="font-size: 9px"><b>EVAL<br>RECUP.</b></td>
                </tr>
                <tr>
                    <td><b>1</b></td>
                    <td><b>2</b></td>
                    <td><b>3</b></td>
                    <td><b>4</b></td>
                </tr>
                <tr>
                    <td rowspan="25" class="fondo" width="50" style="font-size: 10px"><p class="verticalText"><b>MATEMÁTICAS</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>ARITMÉTICA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{$b1[1][1]}}</td>
                    <td>{{$b2[1][1]}}</td>
                    <td>{{$b3[1][1]}}</td>
                    <td>{{$b4[1][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$aritmeticaProm}}</td>
                    <td rowspan="25" style="font-size: 16px">{{$mateProm}}</td>
                    <td rowspan="25" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{$b1[1][2]}}</td>
                    <td>{{$b2[1][2]}}</td>
                    <td>{{$b3[1][2]}}</td>
                    <td>{{$b4[1][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{$b1[1][3]}}</td>
                    <td>{{$b2[1][3]}}</td>
                    <td>{{$b3[1][3]}}</td>
                    <td>{{$b4[1][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td>{{$b1[1][4]}}</td>
                    <td>{{$b2[1][4]}}</td>
                    <td>{{$b3[1][4]}}</td>
                    <td>{{$b4[1][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$aritmetica1}}</b></td>
                    <td><b>{{$aritmetica2}}</b></td>
                    <td><b>{{$aritmetica3}}</b></td>
                    <td><b>{{$aritmetica4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>ÁLGEBRA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{$b1[2][1]}}</td>
                    <td>{{$b2[2][1]}}</td>
                    <td>{{$b3[2][1]}}</td>
                    <td>{{$b4[2][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$algebraProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{$b1[2][2]}}</td>
                    <td>{{$b2[2][2]}}</td>
                    <td>{{$b3[2][2]}}</td>
                    <td>{{$b4[2][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{$b1[2][3]}}</td>
                    <td>{{$b2[2][3]}}</td>
                    <td>{{$b3[2][3]}}</td>
                    <td>{{$b4[2][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td>{{$b1[2][4]}}</td>
                    <td>{{$b2[2][4]}}</td>
                    <td>{{$b3[2][4]}}</td>
                    <td>{{$b4[2][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$algebra1}}</b></td>
                    <td><b>{{$algebra2}}</b></td>
                    <td><b>{{$algebra3}}</b></td>
                    <td><b>{{$algebra4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>GEOMETRÍA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{$b1[3][1]}}</td>
                    <td>{{$b2[3][1]}}</td>
                    <td>{{$b3[3][1]}}</td>
                    <td>{{$b4[3][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$geometriaProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{$b1[3][2]}}</td>
                    <td>{{$b2[3][2]}}</td>
                    <td>{{$b3[3][2]}}</td>
                    <td>{{$b4[3][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{$b1[3][3]}}</td>
                    <td>{{$b2[3][3]}}</td>
                    <td>{{$b3[3][3]}}</td>
                    <td>{{$b4[3][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td>{{$b1[3][4]}}</td>
                    <td>{{$b2[3][4]}}</td>
                    <td>{{$b3[3][4]}}</td>
                    <td>{{$b4[3][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$geometria1}}</b></td>
                    <td><b>{{$geometria2}}</b></td>
                    <td><b>{{$geometria3}}</b></td>
                    <td><b>{{$geometria4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>TRIGONOMETRÍA</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{$b1[4][1]}}</td>
                    <td>{{$b2[4][1]}}</td>
                    <td>{{$b3[4][1]}}</td>
                    <td>{{$b4[4][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$trigonometriaProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{$b1[4][2]}}</td>
                    <td>{{$b2[4][2]}}</td>
                    <td>{{$b3[4][2]}}</td>
                    <td>{{$b4[4][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{$b1[4][3]}}</td>
                    <td>{{$b2[4][3]}}</td>
                    <td>{{$b3[4][3]}}</td>
                    <td>{{$b4[4][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td>{{$b1[4][4]}}</td>
                    <td>{{$b2[4][4]}}</td>
                    <td>{{$b3[4][4]}}</td>
                    <td>{{$b4[4][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$trigonometria1}}</b></td>
                    <td><b>{{$trigonometria2}}</b></td>
                    <td><b>{{$trigonometria3}}</b></td>
                    <td><b>{{$trigonometria4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>RAZ.<br>MATEMÁTICO</b></p></td>
                    <td class="text-left">Piensa matemáticamente situaciones de cantidad.</td>
                    <td>{{$b1[5][1]}}</td>
                    <td>{{$b2[5][1]}}</td>
                    <td>{{$b3[5][1]}}</td>
                    <td>{{$b4[5][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$rmProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de regularidad.</td>
                    <td>{{$b1[5][2]}}</td>
                    <td>{{$b2[5][2]}}</td>
                    <td>{{$b3[5][2]}}</td>
                    <td>{{$b4[5][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de forma y mov.</td>
                    <td>{{$b1[5][3]}}</td>
                    <td>{{$b2[5][3]}}</td>
                    <td>{{$b3[5][3]}}</td>
                    <td>{{$b4[5][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Piensa matemáticamente situaciones de gestión.</td>
                    <td>{{$b1[5][4]}}</td>
                    <td>{{$b2[5][4]}}</td>
                    <td>{{$b3[5][4]}}</td>
                    <td>{{$b4[5][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$rm1}}</b></td>
                    <td><b>{{$rm2}}</b></td>
                    <td><b>{{$rm3}}</b></td>
                    <td><b>{{$rm4}}</b></td>
                </tr>
                <tr>
                    <td rowspan="20"  class="fondo"  style="font-size: 10px"><p class="verticalText"><b>COMUNICACIÓN</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>RAZ. <br> VERBAL</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{$b1[6][1]}}</td>
                    <td>{{$b2[6][1]}}</td>
                    <td>{{$b3[6][1]}}</td>
                    <td>{{$b4[6][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$rvProm}}</td>
                    <td rowspan="20" style="font-size: 16px">{{$comunicacionProm}}</td>
                    <td rowspan="20" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{$b1[6][2]}}</td>
                    <td>{{$b2[6][2]}}</td>
                    <td>{{$b3[6][2]}}</td>
                    <td>{{$b4[6][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{$b1[6][3]}}</td>
                    <td>{{$b2[6][3]}}</td>
                    <td>{{$b3[6][3]}}</td>
                    <td>{{$b4[6][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td>{{$b1[6][4]}}</td>
                    <td>{{$b2[6][4]}}</td>
                    <td>{{$b3[6][4]}}</td>
                    <td>{{$b4[6][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$rv1}}</b></td>
                    <td><b>{{$rv2}}</b></td>
                    <td><b>{{$rv3}}</b></td>
                    <td><b>{{$rv4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>PLAN <br> LECTOR</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{$b1[7][1]}}</td>
                    <td>{{$b2[7][1]}}</td>
                    <td>{{$b3[7][1]}}</td>
                    <td>{{$b4[7][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$plProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{$b1[7][2]}}</td>
                    <td>{{$b2[7][2]}}</td>
                    <td>{{$b3[7][2]}}</td>
                    <td>{{$b4[7][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{$b1[7][3]}}</td>
                    <td>{{$b2[7][3]}}</td>
                    <td>{{$b3[7][3]}}</td>
                    <td>{{$b4[7][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td>{{$b1[7][4]}}</td>
                    <td>{{$b2[7][4]}}</td>
                    <td>{{$b3[7][4]}}</td>
                    <td>{{$b4[7][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$pl1}}</b></td>
                    <td><b>{{$pl2}}</b></td>
                    <td><b>{{$pl3}}</b></td>
                    <td><b>{{$pl4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>LENGUAJE</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{$b1[8][1]}}</td>
                    <td>{{$b2[8][1]}}</td>
                    <td>{{$b3[8][1]}}</td>
                    <td>{{$b4[8][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$lenguajeProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{$b1[8][2]}}</td>
                    <td>{{$b2[8][2]}}</td>
                    <td>{{$b3[8][2]}}</td>
                    <td>{{$b4[8][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{$b1[8][3]}}</td>
                    <td>{{$b2[8][3]}}</td>
                    <td>{{$b3[8][3]}}</td>
                    <td>{{$b4[8][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td>{{$b1[8][4]}}</td>
                    <td>{{$b2[8][4]}}</td>
                    <td>{{$b3[8][4]}}</td>
                    <td>{{$b4[8][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$lenguaje1}}</b></td>
                    <td><b>{{$lenguaje2}}</b></td>
                    <td><b>{{$lenguaje3}}</b></td>
                    <td><b>{{$lenguaje4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>LITERATURA</b></p></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{$b1[9][1]}}</td>
                    <td>{{$b2[9][1]}}</td>
                    <td>{{$b3[9][1]}}</td>
                    <td>{{$b4[9][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$literaturaProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{$b1[9][2]}}</td>
                    <td>{{$b2[9][2]}}</td>
                    <td>{{$b3[9][2]}}</td>
                    <td>{{$b4[9][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{$b1[9][3]}}</td>
                    <td>{{$b2[9][3]}}</td>
                    <td>{{$b3[9][3]}}</td>
                    <td>{{$b4[9][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td>{{$b1[9][4]}}</td>
                    <td>{{$b2[9][4]}}</td>
                    <td>{{$b3[9][4]}}</td>
                    <td>{{$b4[9][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$literatura1}}</b></td>
                    <td><b>{{$literatura2}}</b></td>
                    <td><b>{{$literatura3}}</b></td>
                    <td><b>{{$literatura4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="5"><b>INGLÉS</b></td>
                    <td class="text-left">Comprende textos orales</td>
                    <td>{{$b1[10][1]}}</td>
                    <td>{{$b2[10][1]}}</td>
                    <td>{{$b3[10][1]}}</td>
                    <td>{{$b4[10][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$inglesProm}}</td> <!-- promedio -->
                    <td rowspan="5" style="font-size: 16px">{{$inglesProm}}</td>
                    <td rowspan="5" style="font-size: 16px">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Se expresa oralmente</td>
                    <td>{{$b1[10][2]}}</td>
                    <td>{{$b2[10][2]}}</td>
                    <td>{{$b3[10][2]}}</td>
                    <td>{{$b4[10][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprende textos escritos</td>
                    <td>{{$b1[10][3]}}</td>
                    <td>{{$b2[10][3]}}</td>
                    <td>{{$b3[10][3]}}</td>
                    <td>{{$b4[10][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Produce textos</td>
                    <td>{{$b1[10][4]}}</td>
                    <td>{{$b2[10][4]}}</td>
                    <td>{{$b3[10][4]}}</td>
                    <td>{{$b4[10][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$ingles1}}</b></td>
                    <td><b>{{$ingles2}}</b></td>
                    <td><b>{{$ingles3}}</b></td>
                    <td><b>{{$ingles4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>ARTE</b></td>
                    <td class="text-left">Expresión artística</td>
                    <td>{{$b1[11][1]}}</td>
                    <td>{{$b2[11][1]}}</td>
                    <td>{{$b3[11][1]}}</td>
                    <td>{{$b4[11][1]}}</td>
                    <td rowspan="3">{{$arteProm}}</td> <!-- promedio -->
                    <td rowspan="3">{{$arteProm}}</td>
                    <td rowspan="3">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Apreciación artística</td>
                    <td>{{$b1[11][2]}}</td>
                    <td>{{$b2[11][2]}}</td>
                    <td>{{$b3[11][2]}}</td>
                    <td>{{$b4[11][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$arte1}}</b></td>
                    <td><b>{{$arte2}}</b></td>
                    <td><b>{{$arte3}}</b></td>
                    <td><b>{{$arte4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" rowspan="10"><p class="verticalText"><b>CIENCIAS SOCIALES</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>HISTORIA</b></p></td>
                    <td class="text-left">Construye interpretaciones históricas</td>
                    <td>{{$b1[12][1]}}</td>
                    <td>{{$b2[12][1]}}</td>
                    <td>{{$b3[12][1]}}</td>
                    <td>{{$b4[12][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$historiapProm}}</td> <!-- promedio -->
                    <td rowspan="10">{{$socialesProm}}</td>
                    <td rowspan="10">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente en el ambiente</td>
                    <td>{{$b1[12][2]}}</td>
                    <td>{{$b2[12][2]}}</td>
                    <td>{{$b3[12][2]}}</td>
                    <td>{{$b4[12][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente respecto a los recursos econ.</td>
                    <td>{{$b1[12][3]}}</td>
                    <td>{{$b2[12][3]}}</td>
                    <td>{{$b3[12][3]}}</td>
                    <td>{{$b4[12][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Participa en asuntos públicos promoviendo el bien común</td>
                    <td>{{$b1[12][4]}}</td>
                    <td>{{$b2[12][4]}}</td>
                    <td>{{$b3[12][4]}}</td>
                    <td>{{$b4[12][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$historiap1}}</b></td>
                    <td><b>{{$historiap2}}</b></td>
                    <td><b>{{$historiap3}}</b></td>
                    <td><b>{{$historiap4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>GEOGRAFÍA</b></p></td>
                    <td class="text-left">Construye interpretaciones históricas</td>
                    <td>{{$b1[14][1]}}</td>
                    <td>{{$b2[14][1]}}</td>
                    <td>{{$b3[14][1]}}</td>
                    <td>{{$b4[14][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$geografiaProm}}</td> <!-- promedio -->
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente en el ambiente</td>
                    <td>{{$b1[14][2]}}</td>
                    <td>{{$b2[14][2]}}</td>
                    <td>{{$b3[14][2]}}</td>
                    <td>{{$b4[14][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Actua responsablemente respecto a los recursos econ.</td>
                    <td>{{$b1[14][3]}}</td>
                    <td>{{$b2[14][3]}}</td>
                    <td>{{$b3[14][3]}}</td>
                    <td>{{$b4[14][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Participa en asuntos públicos promoviendo el bien común</td>
                    <td>{{$b1[14][4]}}</td>
                    <td>{{$b2[14][4]}}</td>
                    <td>{{$b3[14][4]}}</td>
                    <td>{{$b4[14][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$geografia1}}</b></td>
                    <td><b>{{$geografia2}}</b></td>
                    <td><b>{{$geografia3}}</b></td>
                    <td><b>{{$geografia4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>FORMACIÓN<br> CIUDADANA <br>Y CÍVICA</b></td>
                    <td class="text-left">Convive respetándose a si mismo y a los demás</td>
                    <td>{{$b1[15][1]}}</td>
                    <td>{{$b2[15][1]}}</td>
                    <td>{{$b3[15][1]}}</td>
                    <td>{{$b4[15][1]}}</td>
                    <td rowspan="3">{{$civicaProm}}</td> <!-- promedio -->
                    <td rowspan="3">{{$civicaProm}}</td>
                    <td rowspan="3">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">participa en los asuntos públicos promoviendo el bien común</td>
                    <td>{{$b1[15][2]}}</td>
                    <td>{{$b2[15][2]}}</td>
                    <td>{{$b3[15][2]}}</td>
                    <td>{{$b4[15][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$civica1}}</b></td>
                    <td><b>{{$civica2}}</b></td>
                    <td><b>{{$civica3}}</b></td>
                    <td><b>{{$civica4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>PERSONA<br>FAMILIA Y <br>RELACIONES<br> HUMANAS </b></td>
                    <td class="text-left">Afirma su identidad</td>
                    <td>{{$b1[16][1]}}</td>
                    <td>{{$b2[16][1]}}</td>
                    <td>{{$b3[16][1]}}</td>
                    <td>{{$b4[16][1]}}</td>
                    <td rowspan="4">{{$pfrhProm}}</td> <!-- promedio -->
                    <td rowspan="4">{{$pfrhProm}}</td>
                    <td rowspan="4">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye su corporeidad</td>
                    <td>{{$b1[16][2]}}</td>
                    <td>{{$b2[16][2]}}</td>
                    <td>{{$b3[16][2]}}</td>
                    <td>{{$b4[16][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Convive respetándose a si mismo y a los demás</td>
                    <td>{{$b1[16][3]}}</td>
                    <td>{{$b2[16][3]}}</td>
                    <td>{{$b3[16][3]}}</td>
                    <td>{{$b4[16][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$pfrh1}}</b></td>
                    <td><b>{{$pfrh2}}</b></td>
                    <td><b>{{$pfrh3}}</b></td>
                    <td><b>{{$pfrh4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>EDUCACIÓN<br>FÍSICA </b></td>
                    <td class="text-left">Compren. y des. de la Corp. y la Salud</td>
                    <td>{{$b1[17][1]}}</td>
                    <td>{{$b2[17][1]}}</td>
                    <td>{{$b3[17][1]}}</td>
                    <td>{{$b4[17][1]}}</td>
                    <td rowspan="4">{{$efProm}}</td> <!-- promedio -->
                    <td rowspan="4">{{$efProm}}</td>
                    <td rowspan="4">{{$efProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Dominio corporal y expresión creativa</td>
                    <td>{{$b1[17][2]}}</td>
                    <td>{{$b2[17][2]}}</td>
                    <td>{{$b3[17][2]}}</td>
                    <td>{{$b4[17][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Convivencia e interacción sociomotriz</td>
                    <td>{{$b1[17][3]}}</td>
                    <td>{{$b2[17][3]}}</td>
                    <td>{{$b3[17][3]}}</td>
                    <td>{{$b4[17][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$ef1}}</b></td>
                    <td><b>{{$ef2}}</b></td>
                    <td><b>{{$ef3}}</b></td>
                    <td><b>{{$ef4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="3"><b>EDUCACIÓN <br>RELIGIOSA</b></td>
                    <td class="text-left">Comprensión doctrinal cristiana</td>
                    <td>{{$b1[18][1]}}</td>
                    <td>{{$b2[18][1]}}</td>
                    <td>{{$b3[18][1]}}</td>
                    <td>{{$b4[18][1]}}</td>
                    <td rowspan="3">{{$erProm}}</td> <!-- promedio -->
                    <td rowspan="3">{{$erProm}}</td>
                    <td rowspan="3">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Dicernimiento de la fé</td>
                    <td>{{$b1[18][2]}}</td>
                    <td>{{$b2[18][2]}}</td>
                    <td>{{$b3[18][2]}}</td>
                    <td>{{$b4[18][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$er1}}</b></td>
                    <td><b>{{$er2}}</b></td>
                    <td><b>{{$er3}}</b></td>
                    <td><b>{{$er4}}</b></td>
                </tr>
                <tr>
                    <td rowspan="15" class="fondo" style="font-size: 10px"><p class="verticalText"><b>CIENCIA <br>TECNOLOGÍA <br>Y AMBIENTE</b></p></td>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>FÍSICA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{$b1[19][1]}}</td>
                    <td>{{$b2[19][1]}}</td>
                    <td>{{$b3[19][1]}}</td>
                    <td>{{$b4[19][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$fisicaProm}}</td>
                    <td rowspan="15" style="font-size: 16px">{{$cienciasProm}}</td>
                    <td rowspan="15" style="font-size: 16px"></td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{$b1[19][2]}}</td>
                    <td>{{$b2[19][2]}}</td>
                    <td>{{$b3[19][2]}}</td>
                    <td>{{$b4[19][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{$b1[19][3]}}</td>
                    <td>{{$b2[19][3]}}</td>
                    <td>{{$b3[19][3]}}</td>
                    <td>{{$b4[19][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td>{{$b1[19][4]}}</td>
                    <td>{{$b2[19][4]}}</td>
                    <td>{{$b3[19][4]}}</td>
                    <td>{{$b4[19][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$fisica1}}</b></td>
                    <td><b>{{$fisica2}}</b></td>
                    <td><b>{{$fisica3}}</b></td>
                    <td><b>{{$fisica4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>QUÍMICA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{$b1[20][1]}}</td>
                    <td>{{$b2[20][1]}}</td>
                    <td>{{$b3[20][1]}}</td>
                    <td>{{$b4[20][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$quimicaProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{$b1[20][2]}}</td>
                    <td>{{$b2[20][2]}}</td>
                    <td>{{$b3[20][2]}}</td>
                    <td>{{$b4[20][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{$b1[20][3]}}</td>
                    <td>{{$b2[20][3]}}</td>
                    <td>{{$b3[20][3]}}</td>
                    <td>{{$b4[20][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td>{{$b1[20][4]}}</td>
                    <td>{{$b2[20][4]}}</td>
                    <td>{{$b3[20][4]}}</td>
                    <td>{{$b4[20][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$quimica1}}</b></td>
                    <td><b>{{$quimica2}}</b></td>
                    <td><b>{{$quimica3}}</b></td>
                    <td><b>{{$quimica4}}</b></td>
                </tr>
                <tr>
                    <td class="text-center fondo" rowspan="5"><p class="verticalText"><b>BIOLOGÍA</b></p></td>
                    <td class="text-left">Indaga mediante métodos científicos</td>
                    <td>{{$b1[21][1]}}</td>
                    <td>{{$b2[21][1]}}</td>
                    <td>{{$b3[21][1]}}</td>
                    <td>{{$b4[21][1]}}</td>
                    <td rowspan="5" style="font-size: 16px">{{$biologiaProm}}</td>
                </tr>
                <tr>
                    <td class="text-left">Explica el mundo físico</td>
                    <td>{{$b1[21][2]}}</td>
                    <td>{{$b2[21][2]}}</td>
                    <td>{{$b3[21][2]}}</td>
                    <td>{{$b4[21][2]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Diseña y produce prototipos tecnológicos</td>
                    <td>{{$b1[21][3]}}</td>
                    <td>{{$b2[21][3]}}</td>
                    <td>{{$b3[21][3]}}</td>
                    <td>{{$b4[21][3]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Construye una posición crítica sobre la ciencia</td>
                    <td>{{$b1[21][4]}}</td>
                    <td>{{$b2[21][4]}}</td>
                    <td>{{$b3[21][4]}}</td>
                    <td>{{$b4[21][4]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$biologia1}}</b></td>
                    <td><b>{{$biologia2}}</b></td>
                    <td><b>{{$biologia3}}</b></td>
                    <td><b>{{$biologia4}}</b></td>
                </tr>
                <tr>
                    <td class="fondo" colspan="2" rowspan="4"><b>EDUCACIÓN<br>PARA EL<br>TRABAJO </b></td>
                    <td class="text-left">Gestión de procesos</td>
                    <td>{{$b1[22][1]}}</td>
                    <td>{{$b2[22][1]}}</td>
                    <td>{{$b3[22][1]}}</td>
                    <td>{{$b4[22][1]}}</td>
                    <td rowspan="4">{{$eptProm}}</td> <!-- promedio -->
                    <td rowspan="4">{{$eptProm}}</td>
                    <td rowspan="4">{{""}}</td>
                </tr>
                <tr>
                    <td class="text-left">Ejecución de procesos</td>
                    <td>{{$b1[22][1]}}</td>
                    <td>{{$b2[22][1]}}</td>
                    <td>{{$b3[22][1]}}</td>
                    <td>{{$b4[22][1]}}</td>
                </tr>
                <tr>
                    <td class="text-left">Comprensión y aplicación de tecnología</td>
                    <td>{{$b1[22][1]}}</td>
                    <td>{{$b2[22][1]}}</td>
                    <td>{{$b3[22][1]}}</td>
                    <td>{{$b4[22][1]}}</td>
                </tr>
                <tr>
                    <td class="text-left"><b>PROMEDIO</b></td>
                    <td><b>{{$ept1}}</b></td>
                    <td><b>{{$ept2}}</b></td>
                    <td><b>{{$ept3}}</b></td>
                    <td><b>{{$ept4}}</b></td>
                </tr>
            </table>
        </div>
        {{-- <div style="page-break-after:always;"></div> --}}
        <div class="row">&nbsp; </div>
        <div class="row">
            <table>
                <tr>
                    <td width="124">&nbsp;</td>
                    <td>
                            <table  border="1" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:center">
                                <tr>
                                    <td class="text-left fondo" width="181" height="15"><b>ORDEN DE MÉRITO POR BIMESTRE</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td class="text-left fondo" width="63"><b>ANUAL</b></td>
                                    <td width="29"><b>{{""}}</b></td>
                                </tr>
                                <tr>
                                    <td class="text-left fondo" width="181" height="15"><b>COMPORTAMIENTO</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td width="17"><b>{{""}}</b></td>
                                    <td class="text-left fondo" width="63"><b>ANUAL</b></td>
                                    <td width="29"><b>{{""}}</b></td>
                                </tr>
                            </table>
                    </td>
                </tr>
            </table>
            
        </div>    
        <div class="row">&nbsp;</div>
        <div class="row">
            <table  border="1" cellpadding="0" cellspacing="0" style="font-size:9px;text-align:center">
                <tr>
                    <td class="fondo" width="271" height="30"><b>SITUACIÓN FINAL DEL ESTUDIANTE</b></td>
                    
                    <td class="fondo" width="70">
                        <b>Marque con una X <br> lo que corresponda</b>
                    </td>
                    <td class="fondo" width="107">
                        <b>Área o áreas que pasan al <br> proceso de recuperación</b>
                    </td>
                </tr>
                <tr>
                    <td  height="25"><b>APROBADO</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  height="25"><b>REQUIERE RECUPERACIÓN</b></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td  height="25"><b>DESAPROBADO</b></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
