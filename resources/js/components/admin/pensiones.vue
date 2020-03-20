<template>
    <div class="content">
	    <div class="container-fluid" id="cabecera">
            <div class="row">
                <div class="col-md-8">
                    <button class="btn btn-outline-primary" @click="getData(2)">Total Cuotas Restantes</button>
                    <button class="btn btn-outline-primary" @click="getData(1)">Al mes</button>
                    <img src="img/wsp.png" width="40" height="40" title="Enviar wsp a padres con cuotas pendientes" alt="" @click="sendWSP()">
                </div>
                 <!-- <div class="col-md-4">
                    <input type="file" name="archivo"  class="input-file" @change="imageChanged">
                </div> -->
            </div>
            <div class="row" id="pension">
			 <div class="col-md-12">
              <div class="card card-default">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Cuotas Pendientes</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Alumno</label>
                                    <input type="text" class="form-control" readonly v-model="alumno">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha</label>
                                    <input type="date" class="form-control" v-model="fecha">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Comprobante</label>
                                    <input type="text" class="form-control" onkeypress="return filterFloat(event,this)" maxlength="6" v-model="comprobante">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Seleccione Cuotas a Pagar (*)</label>
                            </div>
                            <div class="col-md-6" >
                                <table border=1>
                                    <tr style="background-color: #565656;color:white" class="text-center">
                                        <td>Mes</td>
                                        <td>Monto</td>
                                        <td>Seleccionar</td>    
                                    </tr>
                                    <tr v-for="p in pensiones" :key="p.ID">
                                        <td>{{p.zmes}}</td>
                                        <td class="text-right">{{p.Monto}}</td>
                                        <td class="text-center"><input type="checkbox" @click="pagos(p.ID,p.Monto)"></td>    
                                    </tr>
                                    <tr class="text-right">
                                        <td colspan=2>Total</td>
                                        <td >{{total}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">&nbsp;</div> 
                        <div class="row">
                            <div class="col-md-4">
                                <button class="btn btn-outline-success" @click="pagar(1)">Efectuar Pago <i class="fa fa-dollar"></i></button>
                                <button class="btn btn-outline-danger" @click="pagar(2)">Cancelar <i class="fa fa-power-off"></i></button>
                            </div>
                        </div>
	                </div>
				</div>
			 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Lista de Pensiones</h4>  
	                </div>
	                <div class="card-body">
                        <div class="content table-responsive table-full-width">
                            <v-client-table :data="alumnos" :columns="columns" :options="options">
                                <div slot="Acciones" slot-scope="props">
                                    <button class="btn btn-success" data-toggle="tooltip" v-on:click="verPensiones(props.row.DNI,props.row.Nombre,props.row.apellidos)" data-placement="left" title="Pagar"><i class="fa fa-dollar" aria-hidden="true"></i></button>
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
            archivo:null,
            alumno:null,
            dni:null,
            tipo:null,
            fecha:null,
            comprobante:null,
            alumnos: [{
                cuotas:null,
				Nombre:null,
                apellidos:null,
                Nivel:null,
                grado:null,
                DNI:null
            }],
            total:0.0,
            columns: ["cuotas","apellidos","Nombre","Nivel","grado","Acciones"],
            options: {
				headings:
				{
                cuotas: "Cuotas Pendientes",
				Nombre:"Nombres",
                apellidos:"Apellidos",
                grado:"Grado y Sección"
				},
				sortable: ["apellidos","Nombre","grado"],
				filterable: ["apellidos","Nombre","grado"]
            },
            pensiones:[],
            pension:[]
        }
	},
	mounted()
	{
        $('#error').hide();
        $('#pension').hide();
    },
    created()
    {
        this.getData();
        this.getAutenticacion();
    },
    methods: {
        imageChanged(e){
            console.log(e.target.files[0])
            var fileReader = new FileReader()
            fileReader.readAsDataURL(e.target.files[0])    
            fileReader.onload = (e) =>{
                this.archivo = e.target.result
            }
            console.log(this.publicacion)
        },
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
        verPensiones(id,nom,ape)
        {
            this.dni = id;
            this.$Progress.start();
            axios.get("/getpension/"+id)
            .then(data=>
            {
                this.pensiones = data.data.cuotas;
                this.alumno = nom + " " + ape;
                $('#pension').show();
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        pagos(id,monto)
        {
            var n = this.pension.indexOf(id);
			if(n == -1)
			{
                this.total += parseFloat(monto);
				this.pension.push(id);
			}else{
                this.total -= monto;
				this.pension.splice(n,1);
			}
			console.log(this.pension);
        },
        pagar(acc)
        {
            if(acc == 2)
            {
               location.reload();
            }else{
                this.$Progress.start();
                axios.post("pagarPensiones",{
                    pension:this.pension,
                    total:this.total,
                    dni:this.dni,
                    fecha:this.fecha,
                    comprobante:this.comprobante,
                }).then(data=>{
                    swal({
                        // position: 'top-end',
                        type: 'success',
                        title: 'Pago efectuado correctamente',
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
                        text: 'Comuniquese con el administrador del sistema',
                        showConfirmButton: true,
                    });
                })  
            }
        },
        getData(id)
        {
            var fechaAux   = new Date();
            var year    = fechaAux.getFullYear();
            var month   = fechaAux.getMonth()+1;
            var day     = fechaAux.getDate();
            
            if(month.toString().length == 1) month = "0"+month;
            if(day.toString().length == 1) day = "0"+day;

            this.fecha = year+"-"+month+"-"+day;

            if(id == null)
            {
                this.tipo = 2;
            }else{
                this.tipo = id
            }
            this.$Progress.start();
            axios.get("cuotaspendientes/"+this.tipo)
            .then(data=>
            {
                this.alumnos = data.data.lista;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        sendWSP()
        {
            this.$Progress.start();
            axios.post("sendWSP",{
                archivo:this.archivo,
            }).then(data=>
            {
                swal({
                    // position: 'top-end',
                    type: 'success',
                    title: 'Notificaciones se enviaron correctamente',
                    showConfirmButton: false,
                    timer: 2000
                });
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
                this.$Progress.fail();

            });
        }
    }
}

</script>
