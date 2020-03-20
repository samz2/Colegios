<template>
    <div class="content">
	    <div class="container-fluid"  id="cabecera" >
	    	<div class="row">
			 <div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Costos <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Costos</h4>  
	                </div>
					<div class="card-body">
	                        <div class="row">
                                <div class="col-md-4">
	                                <div class="form-group">
	                                    <label>Descripcion</label>
                                        <input type="hidden" v-model="costo.id" class="form-control">
	                                    <input type="text" v-model="costo.descripcion" class="form-control" maxlength="200">
	                                </div>
	                            </div>
                                <div class="col-md-4">
	                                <div class="form-group">
	                                    <label>Costo</label>
	                                    <input type="text" v-model="costo.costo" onkeypress="return filterFloat(event,this);" class="form-control" maxlength="10">
	                                </div>
	                            </div>
							</div>
							<div class="row text-left">
								<div class="col-md-2">
									<button @click="addCosto()" id="add" class="btn btn-outline-success">Agregar</button>
                                    <button @click="editCosto()" id="edit" class="btn btn-outline-success">Guardar Cambios</button>
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
	                    <h4 class="title">Costos</h4>  
	                </div>
	                <div class="card-body">
						<div class="content table-responsive table-full-width">
                            <v-client-table :data="costos" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
								<button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteCosto(props.row.ID)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
								<button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.ID,props.row.Descripcion,props.row.Monto)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
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
			costo:{
                id:null,
                descripcion:null,
                costo:null,
			},
			costos:[{
				ID:null,
                Descripcion:null,
                Monto:null
            }],
            columns: ["ID","Descripcion","Monto","Acciones"],
            options: {
				headings:
				{
					ID: "ID",
                    Descripcion: "Descripción",
                    Monto:"Monto",
					Acciones: "Acciones",
					
				},
				sortable    : ["ID","Descripcion","Monto"],
				filterable  : ["ID","Descripcion","Monto"]
            },
            tipo:null,
        }
	},
	created(){
        this.getDatos();
        this.getAutenticacion();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#error').hide();
	},
    methods: {
        getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.id = data.data.id;
                if(this.id == 1)
                {
                    $('#cabecera').show();
                    $('#error').hide();
                }else{
                    $('#cabecera').hide();
                    $('#error').show();
                }
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
		getDatos()
        {
            this.$Progress.start();
            axios.get("getCostos")
            .then(data=>
            {
                this.costos = data.data.costos;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
		addCosto()
		{
			axios.post("addCosto",{
				costo:this.costo
			}).then(data=>{
				console.log(data);
				swal({
					position: 'top-end',
					type: 'success',
					title: 'Datos ingresados correctamente',
					showConfirmButton: false,
					timer: 2000
				});
				$('#objetivo').hide();
                $('#edit').hide();
                $('#error').show();
                this.costo.id = null;
                this.costo.descripcion = null;
                this.costo.costo = null;
				this.getDatos();
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
		ocultar(id){
			if(id == '1')
			{
				$('#objetivo').show();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
			}
			
		},
        deleteCosto(id)
        {
            swal({
                title: '¿Deseas eliminar este Costo?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteCosto/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'El Costo ha sido eliminado.',
                             'success'
                                );
                           this.getDatos();
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		edit(id,descripcion,costo)
		{
			$('#objetivo').show();
            $('#edit').show();
            $('#add').hide();
            this.costo.id = id;
            this.costo.descripcion = descripcion;
            this.costo.costo = costo;
		},
		editCosto()
		{
			axios.post("editCosto",{
				costo:this.costo
			}).then(data=>{
				console.log(data);
				swal({
					position: 'top-end',
					type: 'success',
					title: 'Costo editado correctamente',
					showConfirmButton: false,
					timer: 2000
                });
                $('#objetivo').hide();
                $('#edit').hide();
                $('#add').show();
                this.costo.id = null;
                this.costo.descripcion = null;
                this.costo.costo = null;
				this.getDatos();
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
    }
}
</script>
