<template>
    <div class="content">
	    <div class="container-fluid"  id="cabecera" >
	    	<div class="row">
			 <div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Simulacros <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Simulacros</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-3" id="nivel">
                                <div class="form-group">
                                    <label>Bimestre(*)</label>
                                    <select v-model="simulacro.bimestre" class="form-control">
                                        <option v-for="b in bimestres" :key="b.ID" :value="b.ID">{{b.bimestre}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Número(*)</label>
                                    <input type="text" class="form-control" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="1" v-model="simulacro.numero">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Lectivo(*)</label>
                                    <input type="text" class="form-control" v-model="simulacro.lectivo" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="4">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Fecha(*)</label>
                                    <input type="date" class="form-control" v-model="simulacro.fecha">
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button @click="addSimulacro()" id="add" class="btn btn-outline-success">Agregar</button>
                                <button @click="editCurso()" id="edit" class="btn btn-outline-success">Guardar Cambios</button>
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
	                    <h4 class="title">Simulacros</h4>  
	                </div>
	                <div class="card-body">
						<div class="content table-responsive table-full-width">
                            <v-client-table :data="simulacros" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
								<button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteCurso(props.row.ID)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
								<button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.IDSimulacro,props.row.Numero,props.row.Fecha)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                </div>
						    </v-client-table>
                        </div>
					</div>
	    		</div>
			 </div>
			</div>	
	</div>
    <div class="container-fluid" id="error">
        <div class="row">
            <div class="col-md-12">
				<div class="card card-default">
	                <div class="card-body">
						<h1 style="color: red">Usted no tiene acceso a esta vista</h1>  
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
			simulacro:{
                id:null,
                bimestre:null,
                lectivo:null,
                fecha:null,
                numero:null
			},
			simulacros	:[{
				IDSimulacro:null,
                Bimestre:null,
                Numero:null,
                Lectivo:null,
                Fecha:null,
            }],
            columns: ["Bimestre","Numero","Lectivo","Fecha","Acciones"],
            options: {
				headings:
				{
                    Bimestre:"Bimestre",
                    Numero:"Numero",
                    Lectivo:"Lectivo",
                    Fecha:"Fecha",
				},
				sortable    : ["Bimestre","Numero","Lectivo","Fecha"],
				filterable  : ["Bimestre","Numero","Lectivo","Fecha"]
            },
            bimestres:[{ID:1,bimestre:"I"},{ID:2,bimestre:"II"},{ID:3,bimestre:"III"},{ID:4,bimestre:"IV"}],
            tipo:null,
            gradosAsignados:[]
        }
	},
	created(){
        this.getAutenticacion();
        this.getSimulacros();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#grado').hide();
        $('#error').hide();
	},
    methods: {
        getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.tipo = data.data.id;
                if(this.tipo == 1)
                {
                    $('#cabecera').show();
                    $('#error').hide();
                }else{
                    $('#cabecera').hide();
                    $('#error').show();
                }
                this.$Progress.finish();
                var f = new Date();
                this.simulacro.lectivo = f.getFullYear();
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
        getSimulacros()
        {
            this.$Progress.start();
            axios.get("getSimulacros")
            .then(data=>
            {
                this.simulacros = data.data.simulacros;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		
		addSimulacro()
		{
            if(this.simulacro.lectivo == null || this.simulacro.fecha == null 
            || this.simulacro.numero == null || this.simulacro.bimestre == null)
            {
                swal({
					type: 'error',
					title: 'Llenar los datos obligatorios',
					showConfirmButton: false,
					timer: 2000
				});
            }else if(this.simulacro.lectivo.length  < 4)
            {
                swal({
					type: 'error',
					title: 'Ingrese un año lectivo válido (aaaa)',
					showConfirmButton: false,
					timer: 2000
				});
            }
            else{
                this.$Progress.start();
                axios.post("addSimulacro",{
                    simulacro:this.simulacro
                }).then(data=>{
                    swal({
                        type: 'success',
                        title: 'Simulacro creado con éxito',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.$Progress.finish();
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }).catch(error=>{
                    console.log(error);	
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'Verifique los campos los campos obligatorios',
                        showConfirmButton: true,
                    });
                })
            }
			
		},
		ocultar(id){
			if(id == '1')
			{
                $('#objetivo').show();
                $('#nivel').show();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
			}
			
		},
        deleteCurso(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este Curso?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteCurso/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'El Curso ha sido eliminado.',
                             'success'
								);
						this.$Progress.finish();
						this.getCursos();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		edit(id,numero,fecha)
		{
			$('#objetivo').show();
            $('#edit').show();
            $('#add').hide();
            $('#nivel').hide();
            this.simulacro.id = id;
            this.simulacro.numero = numero;
            this.simulacro.fecha  = fecha;
		},
		editCurso()
		{
			axios.post("editCurso",{
				curso:this.curso
			}).then(data=>{
				console.log(data);
				swal({
					// position: 'top-end',
					type: 'success',
					title: 'Nivel editado correctamente',
					showConfirmButton: false,
					timer: 2000
                });
                $('#objetivo').hide();
                $('#edit').hide();
                $('#add').show();
                this.curso.id = null;
                this.curso.curso = null;
				this.getCursos();
			}).catch(error=>{
				console.log(error);	
				swal({
					type: 'error',
					title: 'Error',
					text: 'Verifique los campos los campos obligatorios',
					showConfirmButton: true,
				});
			})
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
        gradoscursos()
        {
             this.$Progress.start();
                axios.post("asignGradoCurso",{
                    curso:this.curso,
                    gradosAsignados:this.gradosAsignados,
                }).then(data=>{
                    swal({
                        // position: 'top-end',
                        type: 'success',
                        title: 'Datos ingresados correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.$Progress.finish();
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                    // this.getCursos();
                }).catch(error=>{
                    console.log(error);	
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'Comuniquese con el administrador del sistema',
                        showConfirmButton: true,
                    });
                })
        }
    }
}
</script>
