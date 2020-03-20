<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Area <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">AREAS</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-2" id="nivel">
                                <div class="form-group">
                                    <label>Nivel (*)</label>
                                    <select v-model="area.nivel" class="form-control" @change="getCursos(area.nivel)">
                                        <option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5" id="curso">
                                <div class="form-group">
                                    <label>Curso (*)</label>
                                    <select v-model="area.curso" class="form-control">
                                        <option v-for="c in cursos" :key="c.ID" :value="c.ID">{{c.Curso}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Area (*)</label>
                                    <input type="text" v-model="area.area" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Posicion (*)</label>
                                    <input type="text" v-model="area.posicion" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button @click="addArea()" id="add" class="btn btn-outline-success">Agregar <i class="fa fa-save"></i></button>
                            </div>
                            <div class="col-md-2">
                                <button @click="editArea()" id="editar" class="btn btn-outline-success">Editar <i class="fa fa-edit"></i></button>
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
                                <h4 class="title">AREAS</h4>  
                            </div>
                        <div class="card-body">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="areas" :columns="columns" :options="options">
                                    <div slot="Acciones" slot-scope="props">
                                    <button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteArea(props.row.IDArea)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.IDArea,props.row.Descripcion,props.row.Posicion)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
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
			area:{
                id:null,
                nivel:null,
                curso:null,
                area:null,
                posicion:null
			},
            niveles:[],
            cursos:[],
			areas	:[{
				IDArea:null,
                Nivel:null,
                curso:null,
                Descripcion:null,
                Posicion:null
            }],
            columns: ["Nivel","curso","Descripcion","Posicion","Acciones"],
            options: {
				headings:
				{
                    Nivel:"Nivel",
                    curso:"Curso",
                    Descripcion:"Area",
                    Posicion:"Posición",
					Acciones: "Acciones",
					
				},
				sortable    : ["Nivel","curso","Descripcion","Posicion"],
				filterable  : ["Nivel","curso","Descripcion","Posicion"]
            },
            tipo:null,
        }
	},
	created(){
        this.getDatos();
        this.getAreas();
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
        getAreas()
        {
            this.$Progress.start();
            axios.get("getAreas")
            .then(data=>
            {
                this.areas = data.data.areas;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
		addArea()
		{
            if(this.area.curso == null || this.area.nivel == null || this.area.area == null)
            {
                swal({
					type: 'error',
					title: 'Llenar los datos obligatorios',
					showConfirmButton: false,
					timer: 2000
				});
            }else{
                this.$Progress.start();
                axios.post("addArea",{
                    area:this.area
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
        deleteArea(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este Área?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteArea/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'el área ha sido eliminada.',
                             'success'
								);
						this.$Progress.finish();
						this.getAreas();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		edit(id,area,posicion)
		{
			$('#objetivo').show();
            $('#editar').show();
            $('#add').hide();
            $('#nivel').hide();
            $('#curso').hide();
            this.area.id = id;
            this.area.area = area;
            this.area.posicion = posicion;
		},
		editArea()
		{
			axios.post("editArea",{
				area:this.area
			}).then(data=>{
				console.log(data);
				swal({
					// position: 'top-end',
					type: 'success',
					title: 'Area editada correctamente',
					showConfirmButton: false,
					timer: 2000
                });
                $('#objetivo').hide();
                $('#editar').hide();
                $('#add').show();
                this.area.id = null;
                this.area.area = null;
				this.getAreas();
			}).catch(error=>{
				console.log(error);	
				swal({
					type: 'error',
					title: 'Error',
					text: 'Comuniquese con el administrador del sistema',
					showConfirmButton: true,
				});
			})
        },
    }
}
</script>
