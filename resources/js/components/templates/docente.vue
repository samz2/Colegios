<template>
    <div class="content">
	    <div class="container-fluid">
	    	<div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button  class="btn btn-outline-primary" @click="ocultar('1')">
                                Docente <i class="fa fa-plus"></i>
                                </button>
                                <button  class="btn btn-outline-primary" @click="ocultar('2')">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default" id="objetivo">
                        <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
                            <h4 class="title">Docente</h4>  
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" id="dni">
                                    <div class="form-group">
                                        <label>DNI (*)</label>
                                        <input type="text" v-model="docente.dni" class="form-control"  maxlength="8">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nombre (*)</label>
                                        <input type="text" v-model="docente.nombre" class="form-control"  maxlength="60">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Apellidos (*)</label>
                                        <input type="text" v-model="docente.ape" class="form-control"  maxlength="60">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Direccion (*)</label>
                                        <input type="text" v-model="docente.dir" name="direccion" class="form-control"  maxlength="60">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento (*)</label>
                                        <input type="date" v-model="docente.fecha" class="form-control"  maxlength="60">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Celular (*)</label>
                                        <input type="text" v-model="docente.cel" name="celular" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control"  maxlength="9">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>E-Mail (*)</label>
                                        <input  v-model="docente.correo" name="email" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-2" id="agregar">
                                    <button class="btn btn-outline-success" @click="registrar(1)">Guardar Cambios <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-md-2" id="editar">
                                    <button class="btn btn-outline-success" @click="registrar(2)">Guardar Cambios <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-info" @click="volver()">volver <i class="fa fa-undo"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    
                    <div class="card card-default" id="cursos">
                        <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
                            <h4 class="title">Asignar Cursos</h4>  
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Docente (*)</label>
                                        <input type="text" v-model="docentearea.nombre" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nivel (*)</label>
                                        <select v-model="docentearea.nivel" @change="getCursos(docentearea.nivel)" class="form-control">
                                            <option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Area (*)</label>
                                        <select v-model="docentearea.curso" @change="getAreas(docentearea.curso)" class="form-control">
                                            <option v-for="n in cursos" :key="n.ID" :value="n.ID">{{n.Curso}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Curso (*)</label>
                                        <select v-model="docentearea.area" @change="getGrados(docentearea.nivel)" class="form-control">
                                            <option v-for="a in areas" :key="a.IDArea" :value="a.IDArea">{{a.Descripcion}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Lectivo (*)</label>
                                        <input type="text" v-model="docentearea.lectivo" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4">
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="grados">
                                    <label>Seleccione grados (*)</label>
                            </div>
                            <div class="row" v-for="g in grados" :key="g.id">
                                <div class="col-md-1">{{g.grado}}<input type="checkbox" @click="gradosArray(g.id)"> </div>
                            </div>
                        
                            <div class="row text-left">
                                <div class="col-md-2">
                                    <button class="btn btn-outline-success" @click="addCursos()">Agregar <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-info" @click="volver()">volver <i class="fa fa-undo"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="card card-default" id="tutoria">
                        <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
                            <h4 class="title">Asignar Tutor</h4>  
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Docente (*)</label>
                                        <input type="text" v-model="tutor.nombre" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nivel (*)</label>
                                        <select v-model="tutor.nivel" @change="getGrados(tutor.nivel)" class="form-control">
                                            <option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Grados (*)</label>
                                        <select v-model="tutor.grado" class="form-control">
                                            <option v-for="g in grados" :key="g.id" :value="g.id">{{g.grado}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Lectivo (*)</label>
                                        <input type="text" v-model="tutor.lectivo" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4">
                                    </div>
                                </div>
                            </div>
                            <div class="row text-left">
                                <div class="col-md-2">
                                    <button class="btn btn-outline-success" @click="addTutor()">Agregar <i class="fa fa-save"></i></button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-outline-info" @click="volver()">volver <i class="fa fa-undo"></i></button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
	    	</div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Lista de Docentes</h4>  
	                </div>
	                <div class="card-body">
                        <div class="content table-responsive table-full-width">
                            <v-client-table :data="docentes" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
									<button class="btn btn-success" data-toggle="tooltip" v-on:click="AgregarCursos(props.row.DNI,props.row.Nombre,props.row.Apellidos)" data-placement="left" title="Agregar Cursos"><i class="fa fa-list" aria-hidden="true"></i></button>
									<button class="btn btn-primary" data-toggle="tooltip" v-on:click="AgregarTutoria(props.row.DNI,props.row.Nombre,props.row.Apellidos)" data-placement="left" title="Agregar Tutoría"><i class="fa fa-address-book" aria-hidden="true"></i></button>
									<button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.DNI,props.row.Nombre,props.row.Apellidos,props.row.Direccion,props.row.Celular,props.row.Correo,props.row.Fecha)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
									<button v-if="props.row.Estado == 1" class="btn btn-danger" data-toggle="tooltip" v-on:click="estado(props.row.DNI,0)" title="Desactivar">
                                    	<i class="fa fa-toggle-off" aria-hidden="true"></i>
                                    </button>
                                    <button v-if="props.row.Estado == 0" class="btn btn-success" data-toggle="tooltip" v-on:click="estado(props.row.DNI,1)" title="Activar">
                                    	<i class="fa fa-toggle-on" aria-hidden="true"></i>
                                    </button>
								</div>
					        </v-client-table>
                        </div>
	                </div>
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
            docente: {
				dni:null,
				nombre:null,
				ape:null,
				fecha:null,
				dir:null,
                cel:null,
                correo:null,
                estado:null,
            },
            docentearea: {
                nombre:null,
				docente:null,
				nivel:null,
				curso:null,
                area:null,
                lectivo:null
            },
            tutor:{
                docente:null,
                nombre:null,
                nivel:null,
                grado:null,
                lectivo:null,
            },
            docentes: [{
				DNI:null,
                Nombre:null,
                Apellidos:null,
				Direccion:null,
                Celular:null,
                Correo:null,
                Fecha:null,
            }],
            columns: ["DNI","Nombre","Apellidos","Direccion","Celular","Correo","Acciones"],
            options: {
				headings:
				{
				// CodDocente:"Código",
				DNI:"DNI",
				Nombre:"Nombre",
                Apellidos:"Apellidos",
                Direccion:"Dirección",
                Celular:"Telefono",
                Correo:"E-Mail",
				},
				sortable: ["DNI","Nombre","Apellidos","Direccion","Celular","Correo"],
				filterable: ["DNI","Nombre","Apellidos","Direccion","Celular","Correo"]
            },
            gradosAsignados:[],
            niveles:[],
            cursos:[],
            areas:[],
            grados:[]
        }
	},
	mounted()
	{
		$('#cod').hide();
        $('#objetivo').hide();
		$('#cursos').hide();
		$('#grados').hide();
		$('#editar').hide();
		$('#tutoria').hide();
    },
    created()
    {
		this.getData();
        this.getAutenticacion();
        this.getNiveles();
    },
    methods: {
		getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.id = data.data.id;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            });
            var fecha = new Date();
            var anio = fecha.getFullYear();
            this.docentearea.lectivo = anio;
            this.tutor.lectivo = anio;
        },
        AgregarCursos(dni,nombre,apellidos)
        {
            $("#cursos").show();
            $("#objetivo").hide();
            $("#tutoria").hide();
            this.docentearea.docente = dni;
            this.docentearea.nombre  = nombre + " " + apellidos;
        },
        AgregarTutoria(dni,nombre,apellidos)
        {
            $("#cursos").hide();
            $("#objetivo").hide();
            $("#tutoria").show();
            this.tutor.docente = dni;
            this.tutor.nombre  = nombre + " " + apellidos;
        },
        getCursos(nivel)
        {
            this.$Progress.start();
            axios.get("getCursos/"+nivel)
            .then(data=>
            {
                this.cursos = data.data.cursos;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getGrados(nivel)
        {
    		$('#grados').show();
            this.$Progress.start();
            axios.get("Grados/"+nivel)
            .then(data=>
            {
                this.grados = data.data.grados;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getAreas(curso)
        {
            this.$Progress.start();
            axios.get("getAreas/"+curso)
            .then(data=>
            {
                this.areas = data.data.areas;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getNiveles()
        {
            this.$Progress.start();
            axios.get("getNiveles")
            .then(data=>
            {
                this.niveles = data.data.niveles;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getData()
        {
            axios.get("getDocentes")
            .then(data=>
            {
                this.docentes = data.data.docentes;
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        registrar(id)
		{
            if(id == 1)
            {
                axios.post("addDocente",{
                    docente:this.docente
                }).then(data=>{
                    console.log(data);
                    swal({
                        type: data.data.val,
                        title: data.data.msj,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }).catch(error=>{
                    console.log(error);	
                })
            }else if(id == 2)
            {
                axios.post("updateDocente",{
                    docente:this.docente
                }).then(data=>{
                    console.log(data);
                    swal({
                        type: "success",
                        title: "Datos actualizados correctamente",
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }).catch(error=>{
                    console.log(error);	
                })
            }
			
        },
        addCursos()
		{
			axios.post("addDocenteArea",{
                docentearea:this.docentearea,
                gradosAsignados:this.gradosAsignados                
			}).then(data=>{
				console.log(data);
				swal({
                    type: 'success',
                    title: 'Cursos Asignados Corretamente',
                    showConfirmButton: false,
                    timer: 2000
                });
                setTimeout(() => {
                    location.reload();
                }, 1500);
			}).catch(error=>{
				console.log(error);	
			})
        },
        addTutor()
		{
			axios.post("addTutor",{
                tutor:this.tutor                
			}).then(data=>{
                console.log(data);
                    swal({
                    type: data.data.val,
                    title: data.data.msj,
                    showConfirmButton: false,
                    timer: 2000
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
				
			}).catch(error=>{
                swal({
                    type: 'error',
                    title: 'Consulte con un administrador',
                    showConfirmButton: false,
                    timer: 2000
                });
				console.log(error);	
			})
		},
		ocultar(id){
			if(id == '1')
			{
				$('#objetivo').show();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
				$('#cursos').hide();	
			}
			
        },
        gradosArray(id)
        {
            var n = this.gradosAsignados.indexOf(id);
			if(n == -1)
			{
				this.gradosAsignados.push(id);
			}else{
				this.gradosAsignados.splice(n,1);
			}
			console.log(this.gradosAsignados);
        },
        volver()
        {
            location.reload();
        },
        edit(dni,nombre,apellidos,direccion,celular,correo,fecha)
        {
            $("#cursos").hide();
            $("#objetivo").show();
            $("#agregar").hide();
            $("#editar").show();
            $("#tutoria").hide();
            $("#dni").hide();
            this.docente.dni    = dni;
            this.docente.nombre = nombre;
            this.docente.ape    = apellidos;
            this.docente.dir    = direccion;
            this.docente.cel    = celular;
            this.docente.correo = correo;
            this.docente.fecha  = fecha;
        },
        estado(dni,estado)
        {
            this.docente.dni = dni;
            this.docente.estado = estado;
            axios.post("estadoDocente",{
                    docente:this.docente
                }).then(data=>{
                    console.log(data);
                    swal({
                        type: "success",
                        title: "Datos actualizados correctamente",
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.getData();
                }).catch(error=>{
                    console.log(error);	
                })
        }
    }
}

</script>
