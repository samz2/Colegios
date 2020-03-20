<template>
    <div class="content">
        <div class="container-fluid">
	    	<div class="row">
			 <div class="col-md-12">
	            
				<!-- agregar usuario -->
				<div class="card card-default">
	                <div class="card-header text-center">
	                    <h4 class="title">Publicaciones IMPETU</h4>  
	                </div>
	                <div class="card-body">
	                    <div class="content table-responsive table-full-width">
                    <v-client-table :data="publicacion" :columns="columns" :options="options">
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
        publicacion: [{
                Nombre:null,
                precio:null,
                cliente:null,
            }],
        columns : ["Nombre","precio","cliente"],
        options : {
            headings:{
                Nombre:"Nombre",
                precio:"precio",
                cliente:"cliente",
            },
            sortable : ["cliente"],
            filterable : ["cliente"]
        }    
      }
    },
    created() {
        this.getData();
    },
    methods: {
        getData() {
            axios.get('verReporte')
                .then(data => {
                    this.publicacion = data.data.publicaciones;
					this.$Progress.finish();
					console.log(this.publicacion);
                }).catch(error => {
                    this.$Progress.fail();
                    console.log('Error: ' + error);
                }); 
		}
        
    },
    
  }

</script>
