<template>
    <div class="content">
	    <div class="container-fluid">
	    	<div class="row">
			 <div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Auxiliar <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Auxiliar</h4>  
	                </div>
					<div class="card-body">
	                        <div class="row">
                                <div class="col-md-2">
	                                <div class="form-group">
	                                    <label>DNI (*)</label>
										<input type="text" v-model="aux.dni" class="form-control" onkeypress="return solonumeros(event)" maxlength="8">
	                                </div>
	                            </div>
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Nombre (*)</label>
										<input type="text" v-model="aux.nombre" class="form-control" onkeypress="return sololetras(event)" maxlength="50">
	                                </div>
	                            </div>
                                <div class="col-md-4">
	                                <div class="form-group">
	                                    <label>Apellidos (*)</label>
										<input type="text" v-model="aux.apellidos" class="form-control" onkeypress="return sololetras(event)" maxlength="100">
	                                </div>
	                            </div>
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Fecha Nacimiento (*)</label>
										<input type="date" v-model="aux.fecha" class="form-control" maxlength="100">
	                                </div>
	                            </div>
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Celular (*)</label>
										<input type="text" v-model="aux.celular" class="form-control" onkeypress="return solonumeros(event)" maxlength="9">
	                                </div>
	                            </div>
							</div>
                            <div class="row text-left">
								<div class="col-md-2">
									<button @click="addAuxiliar(1)" class="btn btn-outline-success">Agregar <i class="fa fa-save"></i></button>
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
	                    <h4 class="title">AUXILIARES</h4>  
	                </div>
	                <div class="card-body">
						<div class="content table-responsive table-full-width">
                            <v-client-table :data="auxiliares" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
								<button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteGrado(props.row.id)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
								<button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.id,props.row.Nivel)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
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
			aux:{
                dni:null,
				nombre:null,
				apellidos:null,
				fecha:null,
				celular:null,
			},
			auxiliares	:[{
				IDAuxiliar:null,
				DNIAuxiliar:null,
				Nombre:null,
				Apellidos:null,
				Fecha:null,
				Celular:null,
            }],
            columns: ["DNIAuxiliar","Nombre","Apellidos","Fecha","Celular","Acciones"],
            options: {
				headings:
				{
					DNIAuxiliar:"DNI",
                    Nombre:"Nombres",
                    Apellidos:"Apellidos",
                    Fecha:"Fecha de Nacimiento",
                    Celular:"Celular",
					Acciones: "Acciones",
				},
				sortable    : ["DNIAuxiliar","Nombre","Apellidos","Fecha","Celular"],
				filterable  : ["DNIAuxiliar","Nombre","Apellidos","Fecha","Celular"]
            },
            
        }
	},
	created(){
        // this.getDatos();
		this.getAuxiliares();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#error').hide();
	},
    methods: {
        load()
        {
            $('#objetivo').hide();
            $('#edit').hide();
            $('#error').hide();
            this.aux.fecha = null;
            this.aux.celular = null;
            this.aux.nombre = null;
            this.aux.apellidos = null;
            this.aux.dni = null;
        },
		getAuxiliares()
        {
            this.$Progress.start();
            axios.get("getAuxiliares")
            .then(data=>
            {
                this.auxiliares = data.data.auxiliares;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
		addAuxiliar(e)
		{
            if(e == 1)
            {
                this.$Progress.start();
                axios.post("addAuxiliar",{
                    aux:this.aux
                }).then(data=>{
                    console.log(data);
                    swal({
                        type: data.data.type,
                        title: data.data.title,
                        text: data.data.msj,
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.$Progress.finish();
                    this.load();
                    this.getAuxiliares();
                }).catch(error=>{
                    console.log(error);	
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'comuniquese con un administrador',
                        showConfirmButton: true,
                    });
                })
            }
			
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
        deleteGrado(id)
        {
			this.$Progress.start();
            swal({
                title: '¿Deseas eliminar este Grado?',
                text: "No será posible revertir esta acción!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'cancelar',
            }).then((result) => {
                if (result.value) {
                    axios.get(`/deleteGrado/${id}`)
                        .then(data => {
                        if(data.data=="OK"){
                            swal(
                            'Eliminado!',
                             'El Grado ha sido eliminado.',
                             'success'
								);
                        this.$Progress.finish();
                        setTimeout(() => {
                            location.reload();
                        }, 1500);
                        }
                        }).catch(error => {
                            console.log('Ocurrio un error ' + error);
                            this.$Progress.fail();
                        });
                     }
                });
		},
		edit(id,nivel)
		{
			$('#objetivo').show();
            $('#edit').show();
            $('#add').hide();
            this.nivel.id = id;
            this.nivel.nivel = nivel;
            console.log(id,nivel);
		},
		
		zgrado(e)
		{
			if(e == 1)
			{
				this.dataGrados = this.primaria;
			}else if(e == 2)
			{
				this.dataGrados = this.secundaria;
			}
		}
    }
}
</script>