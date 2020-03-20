<template>
    <div class="content">
	    <div class="container-fluid"  v-if="tipo == 1">
	    	<div class="row">
			 <div class="col-md-12">
				<div class="card card-default">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Resultados</h4>  
	                </div>
	                <div class="card-body">
						<div class="content table-responsive table-full-width">
                            <v-client-table :data="simulacros" :columns="columns" :options="options">
								<div slot="Acciones" slot-scope="props">
								<router-link :to="'notasimulacro/' + props.row.id + '/' +props.row.IDSimulacro" target="_blank" class="btn btn-outline-primary" title="visualizar"><i class="fa fa-eye" aria-hidden="true"></i></router-link>
                                </div>
						    </v-client-table>
                        </div>
					</div>
	    		</div>
			 </div>
			</div>	
	    </div>
        <div class="container-fluid" v-else-if="tipo == 2">
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
                id:null,
                Bimestre:null,
                Numero:null,
				grado:null,
				seccion:null,
                Nivel:null,
                fecha:null
            }],
            columns: ["Bimestre","Numero","Nivel","grado","seccion","fecha","Acciones"],
            options: {
				headings:
				{
                    Bimestre:"Bimestre",
                    Numero:"Número",
                    grado:"Grado",
                    seccion:"Seccion",
                    Nivel:"Nivel",
                    fecha:"Fecha"
					
				},
				sortable    : ["Bimestre","Numero","Nivel","grado","seccion","fecha"],
				filterable  : ["Bimestre","Numero","Nivel","grado","seccion","fecha"]
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
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
		getSimulacros()
        {
            this.$Progress.start();
            axios.get("getNotasimulacro")
            .then(data=>
            {
                this.simulacros = data.data.simulacros;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            });
            
        },
    }
}
</script>
