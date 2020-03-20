<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>ERROR</title>
</head>
<body>
    @php
        // echo ($datos);
        // var_dump($datos);
    @endphp
    <center>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text center">
                <h1>DEBE INICIAR SESIÓN PARA ACCEDER A ESTA VISTA</h1>
                <hr>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text center">
                <a href="../login" type="button" class="btn btn-outline-primary">Iniciar Sesión</a>
                <hr>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 text center">
                <img src="img/error.png" height="600" width="800" alt="" srcset="">
                <hr>
            </div>
        </div> 
    </div>
    </center>
</body>
</html>