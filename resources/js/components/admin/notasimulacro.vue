<template>
    <div class="content">
	    <div class="container-fluid" v-if="auth == 1">
	    	<div class="row">
			 <div class="col-md-12">
	            <div class="card card-default" width="500">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">REGISTRO NOTAS SIMULACRO</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>BIMESTRE</label>
                                        <select class="form-control" v-model="simulacro.bimestre" @change="getSimulacros(simulacro.bimestre)">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>SIMULACRO</label>
                                        <select v-model="simulacro.simulacro" class="form-control">
                                        <option v-for="s in simulacros" :key="s.IDSimulacro" :value="s.IDSimulacro">
                                            {{s.Numero}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>NIVEL</label>
                                    <select v-model="simulacro.nivel" class="form-control" @change="getGrados(simulacro.nivel)">
                                        <option v-for="n in niveles" :key="n.ID" :value="n.ID">
                                            {{n.Nivel}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>GRADO</label>
                                    <select v-model="simulacro.grado" class="form-control" @change="getSecciones(simulacro.nivel,simulacro.grado)">
                                        <option v-for="g in grados" :key="g.grado" :value="g.grado">
                                            {{g.grado}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>SECCIÓN</label>
                                    <select v-model="simulacro.seccion" class="form-control" @change="getAlumnos(simulacro.seccion)">
                                        <option v-for="s in secciones" :key="s.id" :value="s.id">
                                            {{s.seccion}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
	                    
                        
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row" v-if="tipo == 1">
                            <table1 :notas="notas" :datos="datos"></table1>
                        </div>
                        <div class="row" v-else-if="tipo == 2">
                              <table2 :notas="notas" :datos="datos"></table2> 
                        </div>
                        <div class="row" v-else-if="tipo == 3">
                            <table3 :notas="notas" :datos="datos"></table3>
                        </div>
                        <div class="row" v-else-if="tipo == 4">
                            <table4 :notas="notas" :datos="datos"></table4>
                        </div>
                        <div class="row">
                            &nbsp;
                        </div>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button class="btn btn-outline-success" @click="getOrden()">ranking <i class="fa fa-list"></i></button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-outline-success" @click="guardar()">Guardar <i class="fa fa-save"></i></button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
	    	</div>
	</div>
    <div class="container-fluid"  v-if="auth != 1 && auth != null ">
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
import { isNullOrUndefined } from 'util';
    export default {
    data() {
        return {
            datos:{
                bimestre: null,
                simulacro: null,
                nivel: null,
                grado: null,
                seccion: null
            },
            simulacro:{
                bimestre: null,
                simulacro: null,
                nivel: null,
                grado: null,
                seccion: null,
                p1:  1,  
                p2:  1, 
            },
            notas:[{
                index: null,
                dni: null,
                alumno: null,
                rm: null,
                rv: null,
                aritmetica: null,
                algebra:  null,
                geometria:  null,
                trigonometria:  null,
                lenguaje:  null,
                literatura:  null,
                planlector:  null,
                biologia:  null,
                quimica:  null,
                fisica:  null,
                historia:  null,
                historiauniversal:  null,
                geografia:  null,
                civica:  null,
                ingles:  null,
                acumulado:  null,
                promediodec:  null,
                promedio:  null,  
                ordenmerito:  null,
                 
            }],
            grados: [],
            cursos: [],
            orden: [],
            simulacros: [],
            niveles: [],
            secciones: [],
            tipo: null,
            auth: null,
            
        }

	},
	created(){
        this.getAutenticacion();
        this.getNiveles();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#error').hide();
        
	},
    methods: {
        getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.auth = data.data.id;
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getGrados(nivel)
        {
            this.datos.bimestre = this.simulacro.bimestre;
           
            axios.get("getGrados/"+nivel)
            .then(data=>
            {
                this.grados     = data.data.grados; 
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getSimulacros(bimestre)
        {
            axios.get("/getSimulacro/"+bimestre)
            .then(data=>
            {
                this.simulacros   = data.data.simulacros; 
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getNiveles()
        {
            this.$Progress.start();
            axios.get("getNiveles")
            .then(data=>
            {
                this.niveles = data.data.niveles;
                this.$Progress.finish();
                console.log(data.data);
            }
            ).catch(error=>{
                console.log(error);
            })
		},
        getSecciones(nivel,grado)
        {
            this.datos.grado = this.simulacro.grado;
            
            this.$Progress.start();
            axios.get("/getSecciones/"+nivel+"/"+grado)
            .then(data=>
            {
                this.secciones = data.data.secciones;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getAlumnos(grado)
        {
            this.secciones.forEach(element=>{
                if(element.id == this.simulacro.seccion){
                    this.datos.seccion = element.seccion;
                    return;
                }
            });
            axios.get("lista/"+grado)
            .then(data=>
            {
                this.notas = data.data.alumnos;
                this.$Progress.finish();
                console.log(data);
                if(this.simulacro.nivel == 2){
                    if(this.simulacro.grado <=2) this.tipo = 3
                    else this.tipo = 4
                }else if(this.simulacro.nivel == 1){
                    if(this.simulacro.grado <=3) this.tipo = 1
                    else this.tipo = 2
                }
            }
            ).catch(error=>{
                console.log(error);
            })
            console.log("hola"+this.notas);
        },
        guardar()
        {
            if(this.tipo == 3 || this.tipo == 4)
            {
                this.simulacro.p1 = 2;
                this.simulacro.p2 = 4;

            }
            if(this.simulacro.seccion == null){
                swal({
                        // position: 'top-en]d',
                        type: 'error',
                        title: 'error. notas aun no ingresadas',
                        showConfirmButton: false,
                        timer: 2000
                    });
            }else{
            axios.post("addNotasimulacro",{
                notas:this.notas,
                simulacro:this.simulacro,
			}).then(data=>{
                if(data.data.condicion)
                {
                    swal({
                        // position: 'top-en]d',
                        type: 'success',
                        title: 'Registro ingresado Corretamente',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    setTimeout(() => {
                        location.reload();
                    }, 1500);
                }else{
                    swal({
                        // position: 'top-en]d',
                        type: 'error',
                        title: 'Registro ya fue ingresado!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
				
				
			}).catch(error=>{
				console.log(error);	
			})}
        },
        getOrden(){
            var index = 0;
            // $('#ranking').hide();
            // $('#guarda').show();
            axios.post("ordensimulacro",{
                notas:this.notas,
			}).then(data=>{
                this.orden = data.data.alumnos;
                this.notas.forEach(element =>{
                    this.notas[index].ordenmerito = this.orden[element.dni];
                    index += 1;
                });
                 swal({
                        // position: 'top-en]d',
                        type: 'success',
                        title: 'Ranking calculado con éxito',
                        showConfirmButton: false,
                        timer: 2000
                    });
			}).catch(error=>{
				console.log(error);	
			})
        },
        valnum(nota){
            var bool = true;
            if(nota != null && nota != "")
            {
                if(nota <0 || nota >20)
                {
                    swal({
                            type: 'error',
                            title: 'número ingresado es incorrecto, verifique los datos!',
                            showConfirmButton: false,
                            timer: 2000
                        });
                bool = false;
                }
            }
            return bool;
        },
        nonull(input){
            if(input==null){
                return 0;
            }else{
                return parseInt(input);
            }
        },
        // sumar(index){
        //     this.notas[index].acumulado = this.nonull(this.notas[index].rv)+
        //     this.nonull(this.notas[index].rm)+this.nonull(this.notas[index].aritmetica)+
        //     this.nonull(this.notas[index].lenguaje)+this.nonull(this.notas[index].biologia)+
        //     this.nonull(this.notas[index].civica)+this.nonull(this.notas[index].ingles);   
        //     this.notas[index].promediodec = Math.round((this.notas[index].acumulado/7)*100)/100;  
        //     this.notas[index].promedio = Math.round(this.notas[index].promediodec);   
        //     console.log(this.notas[index].promedio);
        // },
        validar(index)
        {
            if(!this.valnum(this.notas[index].rv)){
                this.notas[index].rv = null;
            }
            if(!this.valnum(this.notas[index].rm)){
                this.notas[index].rm = null;
            }
            if(!this.valnum(this.notas[index].matematica)){
                this.notas[index].matematica    = null;
            }
            if(!this.valnum(this.notas[index].comunicacion)){
                this.notas[index].comunicacion = null;
            }
            if(!this.valnum(this.notas[index].ciencia)){
                this.notas[index].ciencia = null;
            }
            if(!this.valnum(this.notas[index].personal)){
                this.notas[index].personal = null;
            }
            if(!this.valnum(this.notas[index].ingles)){
                this.notas[index].ingles = null;
            }
        },
        
    }
}
</script>
