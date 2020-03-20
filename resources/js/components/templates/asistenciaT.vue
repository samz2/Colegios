<template>
    <div class="content">
	    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button  class="btn btn-outline-success" @click="ocultar('1')">
                                INGRESO
                                </button>
                                <button  class="btn btn-outline-danger" @click="ocultar('2')">
                                SALIDA
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-info" id="ingreso">
                        <div class="card-header text-center">
                            <h4 class="title">Lista de Asistencia</h4>  
                        </div>
                        <div class="card-body">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="asistencia" :columns="columns" :options="options">
                                    <div slot="Acciones" slot-scope="props">
                                        <button class="btn btn-outline-success" @click="registrar(props.row.DNI,1)">INGRESO</button>
                                    </div>
                                </v-client-table>
                            </div>
                        </div>
                    </div>
                    <div class="card card-info" id="salida">
                        <div class="card-header text-center">
                            <h4 class="title">Lista de Salida</h4>  
                        </div>
                        <div class="card-body">
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="salida" :columns="columnss" :options="optionss">
                                    <div slot="Acciones" slot-scope="props">
                                        <button class="btn btn-outline-danger" @click="registrar(props.row.DNI,2)">SALIDA</button>
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
            asistencia: [{
                DNI:null,
				Nombre:null,
				Nivel:null,
                grado:null,
                seccion:null
            }],
            columns: ["Nombre","Nivel","grado","seccion","Acciones"],
            options: {
				headings:
				{
				Nombre:"Alumno",
                grado:"Grado",
                seccion:"Sección",
                Nivel:"Nivel",
				},
				sortable: ["Nombre","Nivel","grado","seccion",],
				filterable: ["DNI","Nombre","Nivel","grado","seccion",]
            },
            salida: [{
                DNI:null,
				Nombre:null,
				Nivel:null,
                grado:null,
                seccion:null,
                HoraEntrada:null,
                HoraSalida:null
            }],
            columnss: ["Nombre","Nivel","grado","seccion","HoraEntrada","HoraSalida","Acciones"],
            optionss: {
				headings:
				{
                    Nombre:"Alumno",
                    grado:"Grado",
                    seccion:"Sección",
                    Nivel:"Nivel",
                    HoraEntrada:"Entrada",
                    HoraSalida:"Salida"
				},
				sortable: ["Nombre","Nivel","grado","seccion",],
				filterable: ["DNI","Nombre","Nivel","grado","seccion",]
            },
        }
	},
	mounted()
	{
        // $('#ingreso').hide();
        $('#salida').hide();
    },
    created()
    {
        this.getData();
    },
    methods: {
       
        getData()
        {
            this.$Progress.start();
            axios.get("getAsistencia")
            .then(data=>
            {
                this.asistencia = data.data.asistencia;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        registrar(dni,id)
        {
            if(id == 1)
            {
                axios.get("addAsistencia/"+dni)
                .then(data=>
                {
                    swal(
                    {
                        type : data.data.type,
                        title : data.data.title,
                        text : data.data.msj,
                        showConfirmButton : false,
                        timer: 1000
                    }
                );
                }
                ).catch(error=>{
                    console.log(error);
                })
            }else if(id == 2)
            {
                axios.get("addSalida/"+dni)
                .then(data=>
                {
                    swal(
                        {
                            type : data.data.type,
                            title : data.data.title,
                            text : data.data.msj,
                            showConfirmButton : false,
                            timer: 1000
                        }
                    );
                    this.salir();
                }
                ).catch(error=>{
                    console.log(error);
                })
            }
            
        },
        ocultar(id){
			if(id == '1')
			{
                $('#ingreso').show();
                $('#salida').hide();
			}
			else if(id == '2')
			{
                $('#ingreso').hide();
                $('#salida').show();
                this.salir();
			}
			
        },
        salir()
        {
            axios.get("getSalida/")
            .then(data=>
            {
                this.salida = data.data.salida;
            }
            ).catch(error=>{
                console.log(error);
            })
        }
    }
}

</script>

