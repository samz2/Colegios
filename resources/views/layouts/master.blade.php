<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INTRANET Colegio LA PRE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	{{-- <link rel="stylesheet" href="https://unpkg.com/vue-select@latest/dist/vue-select.css"> --}}
</head>
<style lang="scss">
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
	.dropbox {
		outline: 2px dashed grey; /* the dash box */
		outline-offset: -10px;
		background: lightcyan;
		color: dimgray;
		padding: 10px 10px;
		min-height: 200px; /* minimum height */
		position: relative;
		cursor: pointer;
	}
	/* input[type="text"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
	} */
	.noPadding td {
		padding: 0;
	}
	.noPadding td input 
	{
		margin: 0;
	}
	.input-file {
		opacity: 0; /* invisible but it's there! */
		width: 100%;
		height: 200px;
		position: absolute;
		cursor: pointer;
	}

	.dropbox:hover {
		background: lightblue; /* when mouse over to the drop zone, change color */
	}

	.dropbox p {
		font-size: 1.2em;
		text-align: center;
		padding: 50px 0;
	}
</style>
<body class="sidebar-mini" style="height: auto;">
	
    <div class="wrapper" id="app">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
				</li>
			</ul>
			@php
				$Anio = date("Y");
				$nombre = "";
				if(Auth::user()->tipo == 2)
				{
					$dni = Auth::user()->user;
					$docentes = DB::select("select Nombre as docente from docente where DNI = $dni");
					
					if(count($docentes)>0)
					{
						$docente = $docentes[0]->docente;
					}
					if(isset($docente))
					{
						$nombre = $docente;
					}
				}
				
			@endphp
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- Messages Dropdown Menu -->
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						@switch(Auth::user()->tipo)
							@case(1)
								Administrador({{Auth::user()->user}}) <span class="caret"></span>	
								@break
							@case(2)
								Docente({{$nombre}}) <span class="caret"></span>	
								@break
							@case(3)
								Alumno({{Auth::user()->user}}) <span class="caret"></span>	
								@break
							@case(4)
								Auxiliar({{Auth::user()->user}}) <span class="caret"></span>	
								@break			
							@default
								
						@endswitch
						{{-- {{ Auth::user()->user }} <span class="caret"></span> --}}
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a class="dropdown-item" href="{{ route('logout') }}"
							onclick="event.preventDefault();
										  document.getElementById('logout-form').submit();">
							 {{ __('Cerrar Sesión') }}
						 </a>

						 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							 @csrf
						 </form>
					</div>
				</li>
			</ul>
		</nav>
    
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 600px;">
			<!-- Brand Logo -->
			<router-link to="/home" class="brand-link text-center">
				<span class="brand-text font-weight-light">Colegios particulares</span>
			</router-link>
    
			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				{{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Usuario Autenticado</a>
					</div>
				</div> --}}
    
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

						@switch(Auth::user()->tipo)
							@case(1)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-cogs"></i>
									<p>
										Configuración
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/nivel" class="nav-link">
											<i class="fa fa-list"></i>
											<p>Nivel</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/grados" class="nav-link">
											<i class="fa fa-list"></i>
											<p>Grados</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/cursos" class="nav-link">
											<i class="fa fa-list"></i>
											<p>Cursos</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/areas" class="nav-link">
											<i class="fa fa-list"></i>
											<p>Areas</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/capacidades" class="nav-link">
											<i class="fa fa-list"></i>
											<p>Capacidades</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/costos" class="nav-link">
											<i class="fa fa-dollar"></i>
											<p>Costos</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/auxiliares" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Auxiliar</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Alumnos
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/alumnos" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Lista Alumno</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/matriculados" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Matriculados</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Docentes
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/docentes" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Lista</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/cursosdocentes" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Cursos</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Pagos
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/pensiones" class="nav-link">
											<i class="fa fa-dollar"></i>
											<p>Pensiones</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/ventas" class="nav-link">
											<i class="fa fa-user"></i>
											<p>Ventas</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Simulacros
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/registrosimulacros" class="nav-link">
											<i class="fa fa-plus-circle"></i>
											<p>Crear/Lista</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/notasimulacro" class="nav-link">
											<i class="fa fa-edit"></i>
											<p>Registrar Notas</p>
										</router-link>
									</li>
									<li class="nav-item">
										<router-link to="/resultados" class="nav-link">
											<i class="fa fa-eye"></i>
											<p>Visualizar Notas</p>
										</router-link>
									</li>
								</ul>
							</li>
							@break
							@case(2)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Registro
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/registro" class="nav-link">
											<i class="fa fa-address-book nav-icon"></i>
											<p>Registro de notas</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
									<a href="#" class="nav-link">
										<i class="nav-icon fa fa-folder"></i>
										<p>
											Trabajos
											<i class="fa fa-angle-right right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<router-link to="/upload" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Subir Trabajos Encargados</p>
											</a>
										</li>
										<li class="nav-item">
											<router-link to="/download" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Revisar Trabajos</p>
											</a>
										</li>
										
									</ul>
								</li>
							@break
							@case(3)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Trabajos encargados
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/registro" class="nav-link">
											<i class="fa fa-address-book nav-icon"></i>
											<p>Descargar</p>
										</a>
									</li>
								</ul>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/registro" class="nav-link">
											<i class="fa fa-address-book nav-icon"></i>
											<p>subir</p>
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
									<a href="#" class="nav-link">
										<i class="nav-icon fa fa-folder"></i>
										<p>
											Simulacros
											<i class="fa fa-angle-right right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<router-link to="/individual" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Notas Individuales</p>
											</a>
										</li>
										<li class="nav-item">
											<router-link to="/grupal" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Notas Grupales</p>
											</a>
										</li>
									</ul>
								</li>
								<li class="nav-item has-treeview">
									<a href="boletainformativa" target="_blank" class="nav-link">
										<i class="nav-icon fa fa-list"></i>
										<p>Boleta de notas</p>
									</a>
								</li>
							@break
							@case(4)
							<li class="nav-item has-treeview">
								<a href="home" class="nav-link">
									<i class="nav-icon fa fa-user-circle"></i>
									<p>Perfil</p>
								</a>
							</li>
							<li class="nav-item has-treeview">
								<a href="#" class="nav-link">
									<i class="nav-icon fa fa-folder"></i>
									<p>
										Asistencia
										<i class="fa fa-angle-right right"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<router-link to="/asistencia" class="nav-link">
											<i class="fa fa-address-book nav-icon"></i>
											<p>Asistencia</p>
										</router-link>
									</li>
								</ul>
							</li>
							<li class="nav-item has-treeview">
									<a href="#" class="nav-link">
										<i class="nav-icon fa fa-folder"></i>
										<p>
											Comportamiento
											<i class="fa fa-angle-right right"></i>
										</p>
									</a>
									<ul class="nav nav-treeview">
										<li class="nav-item">
											<router-link to="/comportamiento" class="nav-link">
												<i class="fa fa-eye"></i>
												<p>Comportamiento</p>
											</router-link>
										</li>
									</ul>
								</li>
							
							@break
						@endswitch
					</ul>
				</nav>
			</div>
		</aside>
    
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper" style="min-height: 600px;">
    
			<!-- Main content -->
			<section class="content mt-4">
                @yield('content')
			</section>
		</div>
		<footer class="main-footer">
			<div class="float-right d-none d-sm-block">
				<b>Versión</b> 1.0
			</div>
			<strong>Copyright © {{$Anio}} <a href="https://wa.me/51977252147?text=hola%necesito%ayuda%con%el%sistema" target="_blank">Sistema para gestión de colegios</a>.</strong> Todos los derechos reservados. Desarrollado por Antony Salazar
		</footer>
    </div>
	
	<script src="{{ asset('js/app.js') }}"></script>
	<script type="text/javascript">
	function filterFloat(evt,input){
		// Backspace = 8, Enter = 13, ‘0' = 48, ‘9' = 57, ‘.’ = 46, ‘-’ = 43
		var key = window.Event ? evt.which : evt.keyCode;    
		var chark = String.fromCharCode(key);
		var tempValue = input.value+chark;
		if(key >= 48 && key <= 57){
			if(filter(tempValue)=== false){
				return false;
			}else{       
				return true;
			}
		}else{
				if(key == 8 || key == 13 || key == 0) {     
					return true;              
				}else if(key == 46){
					if(filter(tempValue)=== false){
						return false;
					}else{       
						return true;
					}
				}else{
					return false;
				}
		}
	}
	function filter(__val__){
		var preg = /^([0-9]+\.?[0-9]{0,2})$/; 
		if(preg.test(__val__) === true){
			return true;
		}else{
			return false;
		}
		
	}
	</script>
	<script type="text/javascript">
		function solonumeros(event)
		{
			return event.charCode >= 48 && event.charCode <= 57
		}
		function sololetras(event)
		{
			return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode <= 39)
		}
	</script>	
	<!-- jQuery 3 -->
	<!-- jQuery UI 1.11.4 -->
	{{-- <script>
	$.widget.bridge('uibutton', $.ui.button);
	</script> --}}
	{{-- <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> --}}

	{{-- <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script> --}}
	<script src="plugins/jquery/jquery.min.js"></script>

	{{-- <script src="dist/js/adminlte.min.js"></script> --}}
	{{-- <script src="dist/js/pages/dashboard.js"></script> --}}
	{{-- <script src="dist/js/demo.js"></script> --}}
</body>
</html>