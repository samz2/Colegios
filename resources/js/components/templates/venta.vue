<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<button  class="btn btn-outline-primary" @click="ocultar('1')">
							Venta <i class="fa fa-plus"></i>
							</button>
							<button  class="btn btn-outline-primary" @click="ocultar('2')">
								<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
				</div>
	            <div class="card card-default"  id="objetivo">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Ventas</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Alumno (*)</label>
                                    <v-select v-model="alumnoz" :options="alumnos" :value="alumnos.code"> </v-select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Producto (*)</label>
                                    <select class="form-control" v-model="aux" id="producto" @change="getPrecio()">
                                        <option v-for="(p,index) in productos" :key="p.ID" :value="index">{{p.Descripcion}}</option>    
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Precio (*)</label>
                                    <input class="form-control" v-model="venta.monto" readonly>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Comprobante (*)</label>
                                    <input class="form-control" v-model="venta.comprobante" maxlength="6" onkeypress="return filterFloat(event,this)">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha (*)</label>
                                    <input type="date" class="form-control" v-model="venta.fecha">
                                </div>
                            </div>
                        </div>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button @click="addVenta()" class="btn btn-outline-success">Guardar <i class="fa fa-save"></i></button>
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
                                <h4 class="title">Ventas</h4>  
                            </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Desde (*)</label>
                                        <input type="date" class="form-control" v-model="venta.desde" @change="getVentas()">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Hasta (*)</label>
                                        <input type="date" class="form-control" v-model="venta.hasta" @change="getVentas()">
                                    </div>
                                </div>
                                <div class="col-md-3" id="descarga">
                                    <div class="form-group">
                                        <label>Descarga</label>
                                        <router-link target="_blank" :to="'reporte/'+venta.desde+'/'+venta.hasta"><button class="btn btn-outline-success">descargar <i class="fa fa-download"></i></button></router-link>
                                    </div>
                                </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <v-client-table :data="ventas" :columns="columns" :options="options">
                                    <!-- <div slot="Acciones" slot-scope="props"> -->
                                    <!-- <button class="btn btn-danger" data-toggle="tooltip" v-on:click="deleteArea(props.row.IDArea)" data-placement="left" title="Eliminar"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <button class="btn btn-info" data-toggle="tooltip" v-on:click="edit(props.row.IDArea,props.row.Descripcion,props.row.Posicion)" data-placement="left" title="Editar"><i class="fa fa-pencil" aria-hidden="true"></i></button> -->
                                    <!-- </div> -->
                                </v-client-table>
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
            aux:null,
			venta:{
                desde:null,
                hasta:null,
                alumno:null,
                fecha:null,
                monto:null,
                descripcion:null,
                comprobante:null
            },
            alumnos:[{label:null,code:null}],
            alumnoz:null,
			ventas	:[{
				IDIngreso:null,
                Alumno:null,
                Concepto:null,
                Monto:null,
                Comprobante:null,
                Fecha:null
            }],
            columns: ["Alumno","Concepto","Comprobante","Monto","Fecha"],
            options: {
				headings:
				{
                    Alumno:"Alumno",
                    Concepto:"Concepto",
                    Monto:"Monto",
                    Comprobante:"Comprobante",
                    Fecha:"Fecha",
					
				},
				sortable    : ["Alumno","Concepto","Monto","Comprobante","Fecha"],
				filterable  : ["Alumno","Concepto","Monto","Comprobante","Fecha"]
            },
            tipo:null,
            productos:[]
        }
	},
	created(){
        this.getDatos();
        this.getProductos();
        this.load();
	},
	mounted(){
        $('#objetivo').hide();
        $('#editar').hide();
        $('#grado').hide();
        $('#descarga').hide();
	},
    methods: {
        load()
        {
            $('#objetivo').hide();
            $('#editar').hide();
            $('#grado').hide();
            $('#descarga').hide();
            var fechaAux   = new Date();
            var year    = fechaAux.getFullYear();
            var month   = fechaAux.getMonth()+1;
            var day     = fechaAux.getDate();
            
            if(month.toString().length == 1) month = "0"+month;
            if(day.toString().length == 1) day = "0"+day;

            this.venta.fecha = year+"-"+month+"-"+day;

        },
        getDatos()
        {

            this.$Progress.start();
            axios.get("getAlumnoz")
            .then(data=>
            {
                this.alumnos = data.data.alumnos;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getProductos()
        {
            this.$Progress.start();
            axios.get("getProductos")
            .then(data=>
            {
                this.productos = data.data.productos;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
		getVentas()
        {
            if(this.venta.desde != null && this.venta.hasta != null)
            {
                if(this.venta.desde > this.venta.hasta)
                {
                    swal({
                    type : 'error',
                    title: 'ERROR!',
                    text:  'Fecha Inicio debe ser menor a Fecha Final',
					showConfirmButton: true,
                    });
                }else{
                    this.$Progress.start();
                    axios.post("getVentas",{
                        venta:this.venta
                    }).then(data=>{
                        this.$Progress.finish();
                        this.ventas = data.data.ingresos;
                        if(data.data.IsConsistent)
                        {
                            $('#descarga').show();
                        }else
                        {
                            $('#descarga').hide();
                        }
                        }).catch(error=>{
                        console.log(error);	
                    });
                }
                
            }
            
        },
        getPrecio()
        {
            this.venta.descripcion = this.productos[this.aux].Descripcion;
            this.venta.monto = this.productos[this.aux].Monto;
            // var combo1 = document.getElementById("producto");
            // this.venta.monto = combo1.options[combo1.selectedIndex].text;
        },
		addVenta()
		{
            this.venta.alumno = this.alumnoz.code;
            if(this.venta.alumno == null || this.venta.comprobante == null || this.venta.monto == null
               || this.venta.descripcion == null || this.venta.fecha == null)
            {
                swal({
					type: 'error',
					title: 'Llenar los datos obligatorios',
					showConfirmButton: false,
					timer: 2000
				});
            }else{
                this.$Progress.start();
                axios.post("addVenta",{
                    venta:this.venta
                }).then(data=>{
                    swal({
                        // position: 'top-end',
                        type: 'success',
                        title: 'Datos ingresados correctamente',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    this.$Progress.finish();
                    this.venta.fecha        = null;
                    this.venta.comprobante  = null;
                    this.venta.monto        = null;
                    this.venta.alumno       = null;
                    this.alumnoz            = null;
                    this.aux                = null;
                    this.getVentas();
                    this.load();
                    // setTimeout(() => {
                    //     location.reload();
                    // }, 1500);
                    }).catch(error=>{
                    console.log(error);	
                    swal({
                        type: 'error',
                        title: 'Error',
                        text: 'Comuniquese con un administrador',
                        showConfirmButton: true,
                    });
                })
            }
			
		},
		ocultar(id){
			if(id == '1')
			{
                $('#objetivo').show();
                $('#nivel').show();
                $('#add').show();
                $('#curso').show();
                $('#editar').hide();
			}
			else if(id == '2')
			{
				$('#objetivo').hide();	
			}
			
		},

    }
}
</script>
