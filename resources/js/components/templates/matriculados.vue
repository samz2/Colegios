<template>
    <div class="content">
	    <div class="container-fluid" id="cabecera">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header text-center">
                            <h4 class="title">Lista de Alumnos Matriculados</h4>  
                        </div>
                        <div class="card-body" id="individual">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="alumnos" :columns="columns" :options="options">
                                    <div slot="Acciones" slot-scope="props">
                                        <button class="btn btn-info" data-toggle="modal" v-on:click="verRegistro(props.row.DNI)" title="Ver Registro" data-target="#exampleModal">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </v-client-table>
                            </div>
                        </div>
                        <div class="card-body" id="grados">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="grados" :columns="columnsg" :options="optionsg">
                                    <div slot="Acciones" slot-scope="props">
                                        <router-link class="btn btn-info" :to="'matriculados/'+ props.row.id" target="_blank" title="Ver Registro">
                                            <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                                        </router-link>
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
            alumno:{
                DNI:null,
                Nombre:null,
                apellidos:null,
                Direccion:null,
                Celular:null,
                Nivel:null,
                grado:null,
                seccion:null
            },
            alumnos: [{
                DNI:null,
				Nombre:null,
				apellidos:null,
                grado:null,
                Nivel:null
            }],
            columns: ["apellidos","Nombre","grado","Nivel","Acciones"],
            options: {
				headings:
				{
				Nombre:"Nombre",
				apellidos:"Apellidos",
                grado:"Grado y Sección",
                Nivel:"Nivel",
				},
				sortable: ["apellidos","Nombre","grado"],
				filterable: ["apellidos","Nombre","grado"]
            },
            grados: [{
                id:null,
				Nivel:null,
                grado:null,
                seccion:null
            }],
            columnsg: ["Nivel","grado","seccion","Acciones"],
            optionsg: {
				headings:
				{
                    Nivel:"Nivel",
                    grado:"Grado",
                    seccion:"Sección"
				},
				sortable: ["Nivel","grado","seccion",],
				filterable: ["Nivel","grado","seccion",]
			},
        }
	},
	mounted()
	{
        $('#error').hide();
        $('#individual').hide();
    },
    created()
    {
        this.getData();
        this.getAutenticacion();
        this.getGrados();
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
        
        getData()
        {
            this.$Progress.start();
            axios.get("getMatriculados")
            .then(data=>
            {
                this.alumnos = data.data.matriculados;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getGrados()
        {
            this.$Progress.start();
            axios.get("gradosM")
            .then(data=>
            {
                this.grados = data.data.grados;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
    }
}

</script>

