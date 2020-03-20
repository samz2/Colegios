<template>
    <div class="content">
	    <div class="container-fluid" v-if="tipo == 3">
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
								<router-link :to="'notasIndividuales/'+props.row.Bimestre" target="_blank"><button class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Mostrar"><i class="fa fa-eye" aria-hidden="true"></i></button></router-link> 
                                </div>
						    </v-client-table>
                        </div>
					</div>
	    		</div>
			 </div>
			</div>	
	    </div>
        <div class="container-fluid" v-else-if="tipo!=null && tipo != 3">
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
			simulacros	:[{
				IDSimulacro:null,
                Bimestre:null,
                Nivel:null,
                grado:null,
                seccion:null,
            }],
            columns: ["Bimestre","Nivel","grado","seccion","Acciones"],
            options: {
				headings:
				{
                    Bimestre:"Bimestre",
                    Nivel:"NIvel",
                    grado:"Grado",
                    seccion:"Sección",
				},
				sortable    : ["Bimestre","Nivel","grado","secion"],
				filterable  : ["Bimestre","Nivel","grado","secion"]
            },
            tipo:null,
        }
	},
	created(){
        this.getAutenticacion();
        this.getSimulacros();
	},
	mounted(){
	},
    methods: {
        getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.tipo = data.data.id;
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
        getSimulacros()
        {
            this.$Progress.start();
            axios.get("listasimulacros")
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
    }
}
</script>
