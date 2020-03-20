<template>
    <div class="content">
	    <!-- <div class="container-fluid"> -->
	    	<div class="row" v-if="tipo != null && tipo == 1">
				<perfil1></perfil1>
			</div>
		<!-- </div> -->
	</div>
</template>
<script>
    export default {
    data() {
        return {
			matriculados:null,
			pagadas:null,
			nopagadas:null,
            alumno: {
				dni:null,
				nombre:null,
				pater:null,
				mater:null,
				dir:null,
				fecha:null,
				cel:null
			},
			matricula:{
				alumno:null,
				grado: null,
				lectivo:null,
				nivel:null,
				precio:null,
				seccion:null
			},
			alumnos: [{
				DNI:null,
				nombre:null,
				paterno:null,
                materno:null,
                edad:null,
                direccion:null
            }],
            columns: ["DNI","nombre","paterno","materno","edad","direccion","Acciones"],
            options: {
				headings:
				{
				DNI:"DNI",
				nombre:"Nombres",
				paterno:"Apellido Paterno",
                materno:"Apellido Materno",
                edad:"Edad",
                direccion:"Direccion"
				},
				sortable: ["DNI","nombre","paterno","materno","edad","direccion"],
				filterable: ["DNI","nombre","paterno","materno","edad","direccion"]
			},
			tipo:null,
			dni:null,
			zAlumno:null,
			niveles:[],
			grados:[],
			secciones:[],
        }
	},
	mounted()
	{
		$('#cod').hide();
		$('#objetivo').hide();
		$('#matricula').hide();
	},
	created()
    {
		this.getMatriculados();
		this.getPensiones();
		this.getAutenticacion();
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
		getMatriculados()
		{
			this.$Progress.start();
			axios.get("getNummatriculados")
			.then(data=>
			{
				this.matriculados = data.data.cantidad;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
		},

		getPensiones()
		{
			this.$Progress.start();
			axios.get("/getpensiones")
			.then(data=>
			{
				this.pagadas = data.data.cantidadpagada;
				this.nopagadas = data.data.cantidadnopagada;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
		},
		
    }
}

</script>
