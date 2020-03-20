<template>
    <div class="content">
	    <div class="container-fluid">
	    	<div class="row">
			 <div class="col-md-12">
				 <div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Alumnos <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- agregar usuario -->
	            <div class="card card-default" id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Agregar Alumno</h4>  
	                </div>
	                <div class="card-body">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label>DNI</label>
									<input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  v-model="alumno.dni" class="form-control"  maxlength="8">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Nombres</label>
									<input type="text" v-model="alumno.nombre" class="form-control"  maxlength="60">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Apellidos Paterno</label>
									<input type="text" v-model="alumno.pater" class="form-control"  maxlength="60">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Apellidos Materno</label>
									<input type="text" v-model="alumno.mater" class="form-control"  maxlength="60">
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="form-group">
									<label>Fecha de Nacimiento</label>
									<input type="date" v-model="alumno.fecha" class="form-control"  maxlength="60">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Direccion</label>
									<textarea type="text" v-model="alumno.dir" class="form-control" maxlength="100"></textarea>
								</div>
							</div>
						</div>
						<div class="row text-left">
							<div class="col-md-2" id="agregar">
								<button @click="registrar()" class="btn btn-outline-success">Agregar <i class="fa fa-save"></i></button>
							</div>
							<div class="col-md-2" id="editar">
								<button @click="editar()" class="btn btn-outline-info">Editar <i class="fa fa-edit"></i></button>
							</div>
							<div class="col-md-2">
								<button class="btn btn-outline-primary"  @click="matricular(2)">Volver <i class="fa fa-undo"></i></button>

							</div>
						</div>
						
						<div class="clearfix"></div>
	                </div>
				</div>
			</div>
	    	</div>
			<div class="card card-default" id="matricula">
				<div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
					<h4 class="title">Matricular Alumno</h4>  
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Alumno (*)</label>
								<select v-model="matricula.alumno" class="form-control" readonly>
									<option :value="matricula.alumno">{{zAlumno}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Nivel (*)</label>
								<select v-model="matricula.nivel" class="form-control" @change="zgrado()">
									<option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Grado (*)</label>
								<select v-model="matricula.grado" class="form-control" @change="getSecciones()">
									<option v-for="g in grados" :key="g.grado" :value="g.grado">{{g.grado}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Sección (*)</label>
								<select v-model="matricula.seccion" class="form-control">
									<option v-for="s in secciones" :key="s.id" :value="s.id">{{s.seccion}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-2" >
							<div class="form-group">
								<label>Año lectivo (*)</label>
								<input type="text" id="lectivo" maxlength="4" v-model="matricula.lectivo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' @blur="lectivo()" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Matricula (*)</label>
								<input type="text" v-model="matricula.precio" onkeypress="return filterFloat(event,this);" class="form-control"  maxlength="60">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Pensión (*)</label>
								<input type="text" v-model="matricula.pension" onkeypress="return filterFloat(event,this);" class="form-control"  maxlength="60">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Fecha (*)</label>
								<input type="date" v-model="matricula.fecha" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Recibo N° (*)</label>
								<input type="text" maxlength="6" v-model="matricula.recibo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control">
							</div>
						</div>
					</div>
					<div class="row text-left">
						<div class="col-md-2">
							<button class="btn btn-success" @click="matricular(1)">Matricular</button>
						</div>
						<div class="col-md-2">
							<button class="btn btn-outline-primary"  @click="matricular(2)">Volver <i class="fa fa-undo"></i></button>

						</div>
					</div>
				</div>
			</div>

			<div class="card card-default" id="apoderado">
				<div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
					<h4 class="title">Apoderado Alumno</h4>  
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Alumno (*)</label>
								<select v-model="apoderado.alumno" class="form-control" readonly>
									<option :value="apoderado.alumno">{{zAlumno}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label>Parentesco (*)</label>
								<select v-model="apoderado.parentesco" class="form-control">
									<option v-for="p in parentesco" :key="p.val" :value="p.val">{{p.val}}</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>DNI</label>
								<input type="text" v-model="apoderado.dni" onkeypress="return filterFloat(event,this);" class="form-control"  maxlength="8">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Celular (*)</label>
								<input type="text" v-model="apoderado.celular" onkeypress="return filterFloat(event,this);" class="form-control"  maxlength="10">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nombre (*)</label>
								<input type="text" maxlength="100" v-model="apoderado.nombre" class="form-control">
							</div>
						</div>
					</div>
					<div class="row text-left">
						<div class="col-md-2">
							<button class="btn btn-outline-success" @click="Apoderado()">Agregar <i class="fa fa-save"></i></button>
						</div>
						<div class="col-md-2">
							<button class="btn btn-outline-primary"  @click="matricular(2)">Volver <i class="fa fa-undo"></i></button>
						</div>
					</div>
				</div>
			</div>

			<div class="row" id="lista">
                <div class="col-md-12">
                    <div class="card card-default">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Lista de Alumnos</h4>  
	                </div>
	                <div class="card-body">
                        <div class="content table-responsive table-full-width" style="font-size: 11px;">
                            <v-client-table :data="alumnos" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
									<button class="btn btn-success" data-toggle="tooltip" v-on:click="matricularAlumno(props.row.DNI,props.row.nombre,props.row.paterno,props.row.materno)" data-placement="left" title="Matricular"><i class="fa fa-address-card" aria-hidden="true"></i></button>
									<button class="btn btn-primary" data-toggle="tooltip" v-on:click="addApoderado(props.row.DNI,props.row.nombre,props.row.paterno,props.row.materno)" data-placement="left" title="Agregar Apoderado"><i class="fa fa-user" aria-hidden="true"></i></button>
									<button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.DNI,props.row.nombre,props.row.paterno,props.row.materno,props.row.direccion,props.row.Fecha)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
									<button class="btn btn-info" data-toggle="modal" v-on:click="verRegistro(props.row.DNI)" title="Ver Registro" data-target="#exampleModal">
                                    	<i class="fa fa-eye" aria-hidden="true"></i>
                                    </button>
									<button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteAlumno(props.row.DNI)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
								</div>
					        </v-client-table>
                        </div>
	                </div>
                    </div>
                </div>
            </div>
	    </div>
		<!-- Modal !-->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center" style="background-color: #565656;color:white">
                    <h5 class="modal-titler" id="exampleModalLabel">FICHA ALUMNO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
						<div class="col-md-6 text-right"><b>DNI: </b></div>
						<div class="col-md-6 text-left">{{alumno.DNI}}</div>
						<div class="col-md-6 text-right"><b>Nombre: </b></div>
						<div class="col-md-6 text-left">{{alumno.Nombre}}</div>
						<div class="col-md-6 text-right"><b>Apellidos: </b></div>
						<div class="col-md-6 text-left">{{alumno.apellidos}}</div>
						<div class="col-md-6 text-right"><b>Dirección: </b></div>
						<div class="col-md-6 text-left">{{alumno.Direccion}}</div>
						<div class="col-md-6 text-right"><b>Nivel: </b></div>
						<div class="col-md-6 text-left">{{alumno.Nivel}}</div>
						<div class="col-md-6 text-right"><b>Grado: </b></div>
						<div class="col-md-6 text-left">{{alumno.grado}}</div>
						<div class="col-md-6 text-right"><b>Sección: </b></div>
						<div class="col-md-6 text-left">{{alumno.seccion}}</div>
						<div class="col-md-12"><hr></div>
						<div class="col-md-12 text-center"><b>Apoderados </b></div>
						<div class="col-md-12"><hr></div>
                    </div>
					<div class="row">
						<div class="col-md-4 text-center" ><b>Parentesco</b></div>
						<div class="col-md-4 text-center" ><b>Nombre</b></div>
						<div class="col-md-4 text-center" ><b>Celular</b></div>
					</div>
					<div class="row" v-for="a in apoderados" :key="a">
						<div class="col-md-4 text-center" >{{a.Parentesco}}</div>
						<div class="col-md-4 text-center" >{{a.Nombre}}</div>
						<div class="col-md-4 text-center" >{{a.Celular}}</div>
					</div>
					<div class="row">
						<div class="col-md-12"><hr></div>
					</div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
        </div>
	</div>
</template>

<script>
    export default {
    data() {
        return {
			apoderado:{
				alumno:null,
				parentesco:null,
				nombre:null,
				celular:null,
				dni:null
			},
            alumno: {
				dni:null,
				nombre:null,
				pater:null,
				mater:null,
				dir:null,
				fecha:null,
				cel:null
			},
			matricula:{
				alumno:null,
				grado: null,
				lectivo:null,
				nivel:null,
				precio:null,
				seccion:null,
				fecha:null,
				recibo:null,
				pension:null
			},
			alumnos: [{
				DNI:null,
				nombre:null,
				paterno:null,
                materno:null,
                edad:null,
                direccion:null,
				Fecha:null
            }],
            columns: ["DNI","nombre","paterno","materno","edad","direccion","Acciones"],
            options: {
				headings:
				{
				DNI:"DNI",
				nombre:"Nombres",
				paterno:"Apellido Paterno",
                materno:"Apellido Materno",
                edad:"Edad",
                direccion:"Direccion"
				},
				sortable: ["DNI","nombre","paterno","materno","edad","direccion"],
				filterable: ["DNI","nombre","paterno","materno","edad","direccion"]
			},
			dni:null,
			zAlumno:null,
			niveles:[],
			grados:[],
			secciones:[],
			parentesco:[
				{val:"PADRE"},{val:"MADRE"},{val:"TUTOR"}
				],
			apoderados:[],
        }
	},
	mounted()
	{
		$('#cod').hide();
		$('#objetivo').hide();
		$('#matricula').hide();
		$('#editar').hide();
		$('#apoderado').hide();
	},
	created()
    {
		this.getDatos();
		this.getNiveles();
    },
    methods: {
        registrar()
		{
			axios.post("addAlumno",{
				alumno:this.alumno
			}).then(data=>{
				if(data.data.val)
				{
					swal({
						type: 'success',
						title: data.data.msj,
						showConfirmButton: false,
						timer: 2000
					});
					setTimeout(() => {
						location.reload();
					}, 1500);
				}else{
					swal({
						type: 'warning',
						title: data.data.msj,
						showConfirmButton: false,
						timer: 2000
					});
					setTimeout(() => {
						location.reload();
					}, 1500);	
				}				
				
			}).catch(error=>{
				swal({
					type: 'error',
					title: 'Error',
					text: "Consulte con un administrador",
					showConfirmButton: true,
				});
			})
		},
		editar()
		{
			axios.post("editAlumno",{
				alumno:this.alumno
			}).then(data=>{
  				swal({
					position: 'top-end',
					type: 'success',
					title: 'Alumno Editado Correctamente',
					showConfirmButton: false,
					timer: 2000
				});
				setTimeout(() => {
					location.reload();
				}, 1500);
			}).catch(error=>{
				swal({
					type: 'error',
					title: 'Error',
					text: "Consulte con un administrador",
					showConfirmButton: true,
				});
			})
		},
		Apoderado()
		{
			axios.post("addApoderado",{
				apoderado:this.apoderado
			}).then(data=>{
				if(data.data.IsConsistent)
				{
					swal({
					type: 'success',
					title: data.data.msj,
					showConfirmButton: false,
					timer: 2000
					});
					setTimeout(() => {
						location.reload();
					}, 1500);
				}else
				{
					swal({
					type: 'warning',
					title: data.data.msj,
					showConfirmButton: false,
					timer: 2000
					});
					setTimeout(() => {
						location.reload();
					}, 1500);
				}
  				
			}).catch(error=>{
				swal({
					type: 'error',
					title: 'Error',
					text: "Consulte con un administrador",
					showConfirmButton: true,
				});
			})
		},
		matricular(id)
		{
			if(id == 1)
			{
				if(this.matricula.alumno != null || this.matricula.grado != null || this.matricula.lectivo != null 
				|| this.matricula.nivel != null || this.matricula.fecha != null || this.matricula.recibo != null 
				|| this.matricula.seccion != null || this.matricula.precio != null)
				{
					axios.post("matricular",{
						matricula:this.matricula
					}).then(data=>{
						console.log(data);
						if(data.data.existe)
						{
							swal({
								type: 'success',
								title: 'Alumno Matriculado Correctamente',
								showConfirmButton: false,
								timer: 2000
							});
							setTimeout(() => {
								location.reload();
							}, 1500);
						}else{
							swal({
								type: 'error',
								title: 'Error',
								text: data.data.error,
								showConfirmButton: false,
							});
							setTimeout(() => {
								location.reload();
							}, 1500);
						}
					}).catch(error=>{
						console.log(error);	
						swal({
							type: 'error',
							title: 'Error',
							text: "Error consulte con el administrador del sistema",
							showConfirmButton: true,
						});
					})
				}else
				{
					swal({
							type: 'error',
							title: 'Error',
							text: "Llenar los datos obligatorios",
							showConfirmButton: true,
						});
				}
				
			}else{
				$('#matricula').hide();
				$('#apoderado').hide();
				$('#objetivo').hide();
				this.alumno.dni = null;
				this.alumno.nombre = null;
				this.alumno.pater = null;
				this.alumno.mater = null;
				this.alumno.fecha = null;
				this.alumno.cel = null;
				this.apoderado.dni = null;
				this.apoderado.nombre = null;
				this.apoderado.celular = null;
				this.apoderado.parentesco = null;
				$('#lista').show();
			}
			
		},
		lectivo()
		{
			var lectivo = parseInt(this.matricula.lectivo);
			if(lectivo<=2000 || lectivo >=2100)
			{
				$("#lectivo").css( "background-color", "red" );
			}else
			{
				$("#lectivo").css( "background-color", "white" );
			}
			console.log(this.matricula.lectivo);
		},
		matricularAlumno(dni,nombre,paterno,materno)
		{
			$('#matricula').show();
			$('#lista').hide();
			this.$Progress.start();
			axios.get("getCosto")
            .then(data=>
            {
				this.matricula.precio 	= data.data.matricula;
				this.matricula.pension 	= data.data.pension; 
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
			var fecha = new Date();
			var anio = fecha.getFullYear();
			this.matricula.lectivo = anio;
			this.matricula.alumno  = dni;
			this.zAlumno = nombre + " " + paterno + " " + materno;
		},
		addApoderado(dni,nombre,paterno,materno)
		{
			$('#matricula').hide();
			$('#lista').hide();
			
			$('#apoderado').show();
			this.apoderado.alumno  = dni;
			this.zAlumno = nombre + " " + paterno + " " + materno;
		},
		zgrado()
		{
			var nivel = this.matricula.nivel;
			this.$Progress.start();
            axios.get("getGrados/"+nivel)
            .then(data=>
            {
                this.grados = data.data.grados;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		getSecciones()
		{
			var nivel = this.matricula.nivel;
			var grado = this.matricula.grado;
			this.$Progress.start();
            axios.get("getSecciones/"+nivel+"/"+grado)
            .then(data=>
            {
                this.secciones = data.data.secciones;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		getDatos()
        {
            this.$Progress.start();
            axios.get("getAlumnos")
            .then(data=>
            {
                this.alumnos = data.data.alumnos;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		deleteAlumno(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este Alumno?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteAlumno/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'El Alumno ha sido eliminado.',
                             'success'
								);
						this.$Progress.finish();
						this.getDatos();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		ocultar(id){
			if(id == '1')
			{
				$('#objetivo').show();
				$('#editar').hide();
				$('#agregar').show();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
			}
			
		},
		getNiveles()
        {
            this.$Progress.start();
            axios.get("getNiveles")
            .then(data=>
            {
                this.niveles = data.data.niveles;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		edit(dni,nombre,paterno,materno,dir,fecha)
		{
			$('#objetivo').show();
			$('#agregar').hide();
			$('#editar').show();

			this.alumno.dni = dni;
			this.alumno.nombre = nombre;
			this.alumno.pater  = paterno;
			this.alumno.mater  = materno;
			this.alumno.dir    = dir;
			this.alumno.fecha  = fecha;
		},
		verRegistro(id)
        {
            this.$Progress.start();
            axios.get("/getAlumno/"+id)
            .then(data=>
            {
				this.alumno = data.data.alumno;
				this.apoderados = data.data.apoderados;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
    }
}

</script>
