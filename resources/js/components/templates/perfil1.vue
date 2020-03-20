<template>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
						<div class="inner">
							<h3>{{matriculados}}</h3>
							<p>ALUMNOS MATRICULADOS</p>
						</div>
						<div class="icon">
							<i class="ion ion-person"></i>
						</div>
							<a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                        <h3>{{pagadas}}</h3>

                        <p>CUOTAS PAGADAS</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                            <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                        <h3>{{nopagadas}}</h3>

                        <p>CUOTAS PENDIENTES</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-nuclear"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                        <h3>{{ingresos}}</h3>

                        <p>DINERO TOTAL</p>
                        </div>
                        <div class="icon">
                        <i class="ion ion-cash"></i>
                        </div>
                        <a href="#" class="small-box-footer">Mas Información<i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>    
</template>

<script>
    export default {
    data() {
        return {

			matriculados:null,
			pagadas:null,
			nopagadas:null,
			ingresos:null,
            
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
		this.getIngresos();
    },
    methods: {
  		getIngresos()
		{
			this.$Progress.start();
			axios.get("getIngresos")
			.then(data=>
			{
				this.ingresos = data.data.ingreso;
				this.$Progress.finish();
				console.log(data.data);
			}
			).catch(error=>
			{
				console.log(error);
			})
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
