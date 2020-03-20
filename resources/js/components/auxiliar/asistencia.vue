<template>
    <div class="content">
	    <div class="container-fluid" v-if="tipo != null && tipo == 4">
            <asistenciaT></asistenciaT>
        </div>
        <div class="container-fluid" v-if="tipo != null && tipo != 4">
            <error></error>
        </div>
    </div>	
</template>

<script>
    export default {
    data() {
        return {
            tipo:null,
        }
	},
	created(){
		this.getAutenticacion();
     
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
       
       
    }
}
</script>
