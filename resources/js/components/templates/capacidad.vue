<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Capacidad <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">CAPACIDADES</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-2" id="nivel">
                                <div class="form-group">
                                    <label>Nivel (*)</label>
                                    <select v-model="capacidad.nivel" class="form-control" @change="getCursos(capacidad.nivel)">
                                        <option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5" id="curso">
                                <div class="form-group">
                                    <label>Curso (*)</label>
                                    <select v-model="capacidad.curso" class="form-control">
                                        <option v-for="c in cursos" :key="c.ID" :value="c.ID">{{c.Curso}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Capacidad (*)</label>
                                    <input type="text" v-model="capacidad.capacidad" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Posición (*)</label>
                                    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" v-model="capacidad.posicion" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button @click="addCapacidad()" id="add" class="btn btn-outline-success">Agregar <i class="fa fa-save"></i></button>
                            </div>
                            <div class="col-md-2">
                                <button @click="editCapacidad()" id="editar" class="btn btn-outline-success">Editar <i class="fa fa-edit"></i></button>
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
                                <h4 class="title">CAPACIDADES</h4>  
                            </div>
                        <div class="card-body">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="capacidades" :columns="columns" :options="options">
                                    <div slot="Acciones" slot-scope="props">
                                    <button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteCapacidad(props.row.IDCapacidad)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.IDCapacidad,props.row.Descripcion,props.row.Posicion)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                    </div>
                                </v-client-table>
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
			capacidad:{
                id:null,
                nivel:null,
                curso:null,
                capacidad:null,
                posicion:null
			},
            niveles:[],
            cursos:[],
			capacidades	:[{
				IDCapacidad:null,
                Nivel:null,
                Curso:null,
                Descripcion:null,
                Posicion:null
            }],
            columns: ["Nivel","Curso","Descripcion","Posicion","Acciones"],
            options: {
				headings:
				{
                    Nivel:"Nivel",
                    Curso:"Curso",
                    Descripcion:"Capacidad",
                    Posicion:"Posicion",
					Acciones: "Acciones",
					
				},
				sortable    : ["Nivel","Curso","Descripcion","Posicion"],
				filterable  : ["Nivel","Curso","Descripcion","Posicion"]
            },
            tipo:null,
        }
	},
	created(){
        this.getDatos();
        this.getCapacidades();
	},
	mounted(){
        $('#objetivo').hide();
        $('#editar').hide();
        $('#grado').hide();
	},
    methods: {
        getCursos(id)
        {
            this.$Progress.start();
            axios.get('getCursos/'+id)
            .then(data=>
            {
                this.cursos = data.data.cursos;
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
        getCapacidades()
        {
            this.$Progress.start();
            axios.get("getCapacidades")
            .then(data=>
            {
                this.capacidades = data.data.capacidades;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		addCapacidad()
		{
            if(this.capacidad.curso == null || this.capacidad.nivel == null || this.capacidad.capacidad == null)
            {
                swal({
					type: 'error',
					title: 'Llenar los datos obligatorios',
					showConfirmButton: false,
					timer: 2000
				});
            }else{
                this.$Progress.start();
                axios.post("addCapacidad",{
                    capacidad:this.capacidad
                }).then(data=>{
                    swal({
                        // position: 'top-end',
                        type: 'success',
                        title: 'Datos ingresados correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.$Progress.finish();
                    // setTimeout(() => {
                    //     location.reload();
                    // }, 1500);
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
                $('#add').show();
                $('#curso').show();
                $('#editar').hide();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
			}
			
		},
        deleteCapacidad(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este capacidad?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteCapacidad/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'La Capacidad ha sido eliminado.',
                             'success'
								);
						this.$Progress.finish();
						this.getCapacidades();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		edit(id,capacidad,posicion)
		{
			$('#objetivo').show();
            $('#editar').show();
            $('#add').hide();
            $('#nivel').hide();
            $('#curso').hide();
            this.capacidad.id = id;
            this.capacidad.capacidad = capacidad;
            this.capacidad.posicion = posicion;
		},
		editCapacidad()
		{
			axios.post("editCapacidad",{
				capacidad:this.capacidad
			}).then(data=>{
				console.log(data);
				swal({
					// position: 'top-end',
					type: 'success',
					title: 'Capacidad editada correctamente',
					showConfirmButton: false,
					timer: 2000
                });
                $('#objetivo').hide();
                $('#editar').hide();
                $('#add').show();
                this.capacidad.id = null;
                this.capacidad.capacidad = null;
                this.capacidad.posicion = null;
				this.getCapacidades();
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
    }
}
</script>
