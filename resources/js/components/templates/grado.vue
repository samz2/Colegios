<template>
    <div class="content">
	    <div class="container-fluid">
	    	<div class="row">
			 <div class="col-md-12">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Grados <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Grados</h4>  
	                </div>
					<div class="card-body">
	                        <div class="row">
                                <div class="col-md-4">
	                                <div class="form-group">
	                                    <label>Nivel</label>
										<select v-model="grado.nivel" class="form-control" @change="zgrado(grado.nivel)">
											<option v-for="n in niveles" :key="n.ID" :value="n.ID">{{n.Nivel}}</option>
										</select>
	                                </div>
	                            </div>
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Grado</label>
	                                	<select v-model="grado.grado" class="form-control" >
											<option v-for="d in dataGrados" :key="d.val" :value="d.val">{{d.grado}}</option>
										</select>
									</div>
	                            </div>
								<div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Sección</label>
	                                	<select v-model="grado.seccion" class="form-control" >
											<option v-for="s in secciones" :key="s.val" :value="s.val">{{s.seccion}}</option>
										</select>
									</div>
	                            </div>
							</div>
							<div class="row text-left">
								<div class="col-md-2">
									<button @click="addGrado()" id="add" class="btn btn-outline-success">Agregar</button>
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
	                    <h4 class="title">GRADOS</h4>  
	                </div>
	                <div class="card-body">
						<div class="content table-responsive table-full-width">
                            <v-client-table :data="grados" :columns="columns" :options="options">
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
			grado:{
                id:null,
                nivel:null,
				grado:null,
				seccion:null
			},
			niveles:[],
			grados	:[{
				id:null,
				grado:null,
				seccion:null,
				Nivel:null,
            }],
            columns: ["Nivel","grado","seccion","Acciones"],
            options: {
				headings:
				{
					id: "ID",
					grado:"Grado",
					seccion:"Seccion",
					Nivel: "Nivel",
					Acciones: "Acciones",
					
				},
				sortable    : ["grado","seccion","Nivel"],
				filterable  : ["grado","seccion","Nivel"]
            },
            tipo:null,
			dataGrados:[],
			primaria:[
				{ 
				val:1,
				grado:"Primero"
				},
				{
				val:2,grado:"Segundo"
				},
				{
				val:3,grado:"Tercero"
				},
				{
				val:4,grado:"Cuarto"
				},
				{
				val:5,grado:"Quinto"
				},
				{
				val:6,grado:"Sexto"
				}
				],
			secundaria:[
				{ 
				val:1,
				grado:"Primero"
				},
				{
				val:2,grado:"Segundo"
				},
				{
				val:3,grado:"Tercero"
				},
				{
				val:4,grado:"Cuarto"
				},
				{
				val:5,grado:"Quinto"
				}
			],
			secciones:[
				{ 
				val:"A",
				seccion:"A"
				},
				{
				val:"B",seccion:"B"
				},
				{
				val:"C",seccion:"C"
				},
				{
				val:"D",seccion:"D"
				},
			]
        }
	},
	created(){
        this.getDatos();
		this.getGrados();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#error').hide();
	},
    methods: {
       
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
		getGrados()
        {
            this.$Progress.start();
            axios.get("getGrados")
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
		addGrado()
		{
			this.$Progress.start();
			axios.post("addGrado",{
				grado:this.grado
			}).then(data=>{
				console.log(data);
				swal({
					position: 'top-end',
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