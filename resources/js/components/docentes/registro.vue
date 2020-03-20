<template>
    <div class="content">
	    <div class="container-fluid"  id="cabecera" >
	    	<div class="row">
			 <div class="col-md-12">
	            <div class="card card-default" width="500">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">Registro</h4>  
	                </div>
					<div class="card-body">
                        <!-- <form @submit.prevent="registrar" method="POST"> -->
	                        <div class="row">
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Grado</label>
	                                     <select v-model="docente.grado" @change="getCursos()" class="form-control">
                                            <option v-for="g in grados" :key="g.id" :value="g.id">
                                                {{g.grado}}
                                            </option>
                                        </select>
	                                </div>
	                            </div>
                                <div class="col-md-5">
	                                <div class="form-group">
	                                    <label>Curso</label>
	                                    <select v-model="docente.curso" class="form-control">
                                            <option v-for="(c,index) in cursos" :key="c.id" :value="index+'-'+c.id">
                                                {{c.curso}}
                                            </option>
                                        </select>
	                                </div>
	                            </div>
                                <div class="col-md-3">
	                                <div class="form-group">
	                                    <label>Mes</label>
	                                     <select v-model="docente.unidad" @change="getAlumnos()" class="form-control">
                                            <option v-for="m in meses" :key="m.val" :value="m.val">
                                                {{m.mes}}
                                            </option>
                                        </select>
	                                </div>
	                            </div>
							</div>
							
							<div class="clearfix"></div>
	                    <!-- </form> -->

                        <table border="1" width="500" id="tabla" class="table table-bordered table-hover text-center" >
                            <tr>
                                <td colspan="37"><b>ORGANIZACIÓN EDUCATIVA SELECCIÓN A - SEDE PUCALLPA</b></td>
                            </tr>
                            <tr>
                                <td colspan="37"><b>REGISTRO AUXILIAR DE NOTAS 2019</b></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>ASIGNATURA</b></td>
                                <td colspan="35" class="text-left">{{curso}}</td><!--nombre del curso-->
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>PROFESOR</b></td>
                                <td colspan="35" class="text-left">{{nombre}}</td><!--nombre del DOCENTE-->                                
                            </tr>
                            <!-- <tr>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="35">BIMESTRE</td>
                            </tr> -->
                            <tr>
                                <td colspan="2" class="text-right"><b>MES</b></td>
                                <td colspan="17" class="text-left">{{mes}}</td>
                                <!-- <td colspan="18">SEGUNDO MES</td> -->
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                                <td colspan="5"><b>TAREAS</b></td>
                                <td colspan="5"><b>FEEDBACK</b></td>
                                <td rowspan="2" ><b>R.Libros</b></td>
                                <td rowspan="2" style="vertical-align:middle;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-ms-transform: rotate(270deg);-o-transform: rotate(270deg);transform: rotate(270deg);font-size: 9px"><b>Simulacro</b></td>
                                <td rowspan="2" style="vertical-align:middle;-webkit-transform: rotate(270deg);-moz-transform: rotate(270deg);-ms-transform: rotate(270deg);-o-transform: rotate(270deg);transform: rotate(270deg);font-size: 9px"><b>Ex.Oral</b></td>
                                <td colspan="4"><b>PROMEDIO</b></td>
                                <!-- <td colspan="5">TAREAS</td>
                                <td colspan="5">FEEDBACK</td>
                                <td rowspan="2">RL</td>
                                <td rowspan="2">S</td>
                                <td rowspan="2">EO</td>
                                <td colspan="4">PROMEDIO</td>
                                <td rowspan="2">PB</td> -->
                            </tr>
                            <tr style="font-size: 10px;vertical-align:middle;">
                                <td><b>N°</b></td>
                                <td><b>APELLIDOS Y NOMBRES</b></td>
                                <td><b>1</b></td>
                                <td><b>2</b></td>
                                <td><b>3</b></td>
                                <td><b>4</b></td>
                                <td><b>PT</b></td>
                                <td><b>1</b></td>
                                <td><b>2</b></td>
                                <td><b>3</b></td>
                                <td><b>4</b></td>
                                <td><b>PF</b></td>
                                <td><b>N1</b></td>
                                <td><b>RC</b></td>
                                <td><b>EM</b></td>
                                <td><b>PM1</b></td>
                                <!-- <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>PT</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>PF</td>
                                <td>N1</td>
                                <td>RC</td>
                                <td>EM</td>
                                <td>PM1</td> -->
                            </tr>
                            <!--foreach lista de alumnos-->

                            <tr style="font-size: 10px;" class="noPadding" v-for="(a,index) in notas" :key="a.dni">
                                <td>{{index+1}}</td>
                                <td>{{a.alumno}}</td>
                                <!-- <td><input type="button"></td> -->
                                <td><input type="text" @blur="validar(index)" size="3" v-model="a.tarea1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="3" v-model="a.tarea2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="3" v-model="a.tarea3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="3" v-model="a.tarea4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" size="3" v-model="a.pt" readonly></td>
                                <td><input type="text" @blur="feedback(index)" size="3" v-model="a.f1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="feedback(index)" size="3" v-model="a.f2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="feedback(index)" size="3" v-model="a.f3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="feedback(index)" size="3" v-model="a.f4" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" size="3" v-model="a.pf" readonly></td>
                                <td><input type="text" @blur="valaux(index)" size="3" v-model="a.revisionlibro" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="valaux(index)" size="3" v-model="a.simulacro" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="valaux(index)" size="3" v-model="a.examen" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" size="3" v-model="a.nc1" readonly></td>
                                <td><input type="text" @blur="prom(index)" size="3" v-model="a.revisioncuaderno" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="prom(index)" size="3" v-model="a.examenmensual" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" size="3" v-model="a.promediomensual" readonly></td>
                                <!-- <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td>
                                <td><input type="number" min="0" max="20"></td> -->
                            </tr>
                        </table>
                        <div class="row text-left">
                            <div class="col-md-2">
                                <button class="btn btn-info" @click="guardar()">Guardar</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
	    	</div>
	</div>
    <div class="container-fluid" id="error">
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
            nombre:null,
            docente: {
				dni:null,
                curso:null,
                aux:null,
                nivel:null,
                grado:null,
                unidad:null,
            },
            notas:[{
                dni:null,
                alumno:null,
                tarea1:null,
                tarea2:null,
                tarea3:null,
                tarea4:null,
                pt:null,
                f1:null,
                f2:null,
                f3:null,
                f4:null,
                pf:null,
                revisionlibro:null,
                simulacro:null,
                examen:null,
                nc1:null,
                revisioncuaderno:null,
                examenmensual:null,
                promediomensual:null,
            }],
            meses: [
                    // {val:1,mes:"1 - MARZO"},
                    // {val:2,mes:"2 - ABRIL"},
                    // {val:3,mes:"3 - MAYO"},
                    // {val:4,mes:"4 - JUNIO"},
                    // {val:5,mes:"5 - JULIO"},
                    // {val:6,mes:"6 - AGOSTO"},
                    // {val:7,mes:"7 - SETIEMBRE"},
                    // {val:8,mes:"8 - OCTUBRE"},
                    // {val:9,mes:"9 - NOVIEMBRE"},
                    // {val:10,mes:"10 - DICIEMBRE"},
                    {val:1,mes:"1 - Unidad 1"},
                    {val:2,mes:"2 - Unidad 2"},
                    {val:3,mes:"3 - Unidad 3"},
                    {val:4,mes:"4 - Unidad 4"},
                    {val:5,mes:"5 - Unidad 5"},
                    {val:6,mes:"6 - Unidad 6"},
                    {val:7,mes:"7 - Unidad 7"},
                    {val:8,mes:"8 - Unidad 8"},
                    ],
            grados:[],
            cursos:[],
            alumnos:[],
            mes:null,
            curso:null,
        }
	},
	created(){
        this.getGrados();
        this.getAutenticacion();
        this.getDatos();
		// this.getGrados();
	},
	mounted(){
        $('#objetivo').hide();
        $('#edit').hide();
        $('#error').hide();
        $('#tabla').hide();
	},
    methods: {
        getAutenticacion()
        {
            this.$Progress.start();
            axios.get("autenticacion")
            .then(data=>
            {
                this.id = data.data.id;
                if(this.id == 2)
                {
                    $('#cabecera').show();
                    $('#error').hide();
                }else{
                    $('#cabecera').hide();
                    $('#error').show();
                }
                this.$Progress.finish();
                console.log(this.primaria);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getGrados()
        {
            axios.get("getDocentecurso")
            .then(data=>
            {
                this.grados     = data.data.grados; 
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getDatos()
        {
            this.$Progress.start();
            axios.get("getDocente")
            .then(data=>
            {
                this.nombre = data.data.docente;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getCursos()
        {
            var grado = this.docente.grado;
            this.$Progress.start();
            axios.get("getCursosAsignados/"+grado)
            .then(data=>
            {
                this.cursos = data.data.cursos;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getAlumnos()
        {
            var index = parseInt(this.docente.unidad) - 1;
            var aux  = this.meses[index].mes;
            var n = aux.search("-");
            this.mes = aux.substr(n+2,aux.length - (n+2) );
            this.$Progress.start();
            var idgrado = this.docente.grado;
            var indexaux = this.docente.curso.search("-");
            var indexCurso = this.docente.curso.substr(0,indexaux);
            this.docente.aux = this.docente.curso.substr(indexaux + 1 ,this.docente.curso.length -(indexaux + 1));
            this.curso = this.cursos[indexCurso].curso;
            $('#tabla').show();
            // console.log("vurso: "+curso);
            axios.get("lista/"+idgrado)
            .then(data=>
            {
                this.alumnos = data.data.lista;
                this.notas = data.data.alumnos;
                this.$Progress.finish();
                console.log(data);
            }
            ).catch(error=>{
                console.log(error);
            })
            console.log("hola"+this.notas);
        },
        guardar()
        {
            axios.post("registrarNotas",{
                notas:this.notas,
                alumnos: this.alumnos,
                docente:this.docente,
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
                }else{
                    swal({
                        // position: 'top-en]d',
                        type: 'error',
                        title: 'Registro ya fue ingresado!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                }
				
				setTimeout(() => {
					location.reload();
				}, 1500);
			}).catch(error=>{
				console.log(error);	
			})
        },
        validar(index)
        {
            this.prom(index);
            var n = 0;
            var acum = 0;
            var prom = 0;
            // var valor = this.notas[index].tarea1;
            // var valor1 = this.notas[index].tarea2;
            // var valor2 = this.notas[index].tarea3;
            // var valor3 = this.notas[index].tarea4;

            if(this.notas[index].tarea1 <0 || this.notas[index].tarea1 >20)
            {
                this.notas[index].tarea1 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                this.prom(index);
            }
            if(this.notas[index].tarea2 <0 || this.notas[index].tarea2 >20)
            {
                this.notas[index].tarea2 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                this.prom(index);
            }
            if(this.notas[index].tarea3 < 0 || this.notas[index].tarea3 > 20)
            {
                this.notas[index].tarea3 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                this.prom(index);
            }
            if(this.notas[index].tarea4 <0 || this.notas[index].tarea4>20)
            {
                this.notas[index].tarea4 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                this.prom(index);
            }
            if(this.notas[index].tarea1 != null && this.notas[index].tarea1 != '')
            {
                acum    += parseInt(this.notas[index].tarea1);
                n       +=1;
            }
            if(this.notas[index].tarea2 != null && this.notas[index].tarea2 != '')
            {
                acum    += parseInt(this.notas[index].tarea2);
                n       +=1;
            }
            if(this.notas[index].tarea3 != null && this.notas[index].tarea3 != '')
            {
                acum    += parseInt(this.notas[index].tarea3);
                n       +=1;
            }
            if(this.notas[index].tarea4 != null && this.notas[index].tarea4 != '')
            {
                acum    += parseInt(this.notas[index].tarea4);
                n       +=1;
            }
            if(n != 0)
            {
                prom = acum / n;
            }
            if(prom != null)
            this.notas[index].pt = Math.round(prom);
            else this.notas[index].pt = null;
            // console.log(valor1);
            // if(valor != null && valor1 != null && valor2 == null && valor3 == null)
            // {
            //     // var prom = (parseInt(valor) + parseInt(valor2) + parseInt(valor3) + parseInt(valor1)) / 4;
            //     var prom = (parseInt(valor) + parseInt(valor1)) / 2;
            //     this.notas[index].pt = prom;     
            // }else if(valor != null && valor1 != null && valor2 != null && valor3 == null)
            // {
            //     var prom = (parseInt(valor) + parseInt(valor1)) / 2;
            //     this.notas[index].pt = prom;
            // }
        },
        feedback(index)
        {
            this.prom(index);
            var n = 0;
            var acum = 0;
            var prom = null;
            // var valor = this.notas[index].f1;
            // var valor1 = this.notas[index].f2;
            // var valor2 = this.notas[index].f3;
            // var valor3 = this.notas[index].f4;
            
            if(this.notas[index].f1 <0 || this.notas[index].f1>20)
            {
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.notas[index].f1 = null;
                this.feedback(index);
                this.prom(index);
            }
            if(this.notas[index].f2 <0 || this.notas[index].f2>20)
            {
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.notas[index].f2 = null;
                this.feedback(index);
                this.prom(index);
            }
            if(this.notas[index].f3 <0 || this.notas[index].f3>20)
            {
                this.notas[index].f3 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.feedback(index);
                this.prom(index);
            }
            if(this.notas[index].f4 <0 || this.notas[index].f4>20)
            {
                this.notas[index].f4 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.feedback(index);
                this.prom(index);
            }
            if(this.notas[index].f1 != null && this.notas[index].f1 != '')
            {
                acum    += parseInt(this.notas[index].f1);
                n       +=1;
            }
            if(this.notas[index].f2 != null && this.notas[index].f2 != '')
            {
                acum    += parseInt(this.notas[index].f2);
                n       +=1;
            }
            if(this.notas[index].f3 != null && this.notas[index].f3 != '')
            {
                acum    += parseInt(this.notas[index].f3);
                n       +=1;
            }
            if(this.notas[index].f4 != null && this.notas[index].f4 != '')
            {
                acum    += parseInt(this.notas[index].f4);
                n       +=1;
            }
            if(n != 0)
            {
                prom = acum / n;
            }
            if(prom != null)
            this.notas[index].pf = Math.round(prom);
            else this.notas[index].pf = null;
            console.log(n);
        },
        valaux(index)
        {
            this.prom(index);
            var n = 0;
            var acum = 0;
            var prom = 0;
            // var valor = this.notas[index].revisionlibro;
            // var valor1 = this.notas[index].simulacro;
            // var valor2 = this.notas[index].examen;

            if(this.notas[index].revisionlibro <0 || this.notas[index].revisionlibro>20)
            {
                this.notas[index].revisionlibro = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.valaux(index);
                this.prom(index);
            }
            if(this.notas[index].simulacro <0 || this.notas[index].simulacro>20)
            {
                this.notas[index].simulacro = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.valaux(index);
                this.prom(index);
            }
            if(this.notas[index].examen <0 || this.notas[index].examen>20)
            {
                this.notas[index].examen = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.valaux(index);
                this.prom(index);
            }
            
            if(this.notas[index].revisionlibro != null && this.notas[index].revisionlibro != '')
            {
                acum    += parseInt(this.notas[index].revisionlibro);
                n       +=1;
            }
            if(this.notas[index].simulacro != null && this.notas[index].simulacro != '')
            {
                acum    += parseInt(this.notas[index].simulacro);
                n       +=1;
            }
            if(this.notas[index].examen != null && this.notas[index].examen != '')
            {
                acum    += parseInt(this.notas[index].examen);
                n       +=1;
            }
            if(this.notas[index].pt != '' && this.notas[index].pt != null)
            {
                acum    += parseInt(this.notas[index].pt);
                n       +=1;
            }    
            if(this.notas[index].pf != '' && this.notas[index].pf != null)
            {
                acum    += parseInt(this.notas[index].pf);
                n       +=1;
            }   
            if(n != 0)
            {
                prom = acum / n;
            }
            this.notas[index].nc1 = Math.round(prom);
           
        },
        prom(index)
        {
            var n = 0;
            var acum = 0;
            var prom = 0;
            // var valor = this.notas[index].nc1;
            // var valor1 = this.notas[index].revisioncuaderno;
            // var valor2 = this.notas[index].examenmensual;

            if(this.notas[index].nc1 <0 || this.notas[index].nc1>20)  
            {
                this.notas[index].nc1 = null;
                this.prom(index);
            }
            if(this.notas[index].revisioncuaderno <0 || this.notas[index].revisioncuaderno>20)
            {
                this.notas[index].revisioncuaderno = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.prom(index);
            }
            if(this.notas[index].examenmensual <0 || this.notas[index].examenmensual>20)
            {
                this.notas[index].examenmensual = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.prom(index);
            }
            
            if(this.notas[index].nc1 != null && this.notas[index].nc1 != '')
            {
                acum    += parseInt(this.notas[index].nc1);
                n       +=1;
            }
            if(this.notas[index].revisioncuaderno != null && this.notas[index].revisioncuaderno != '')
            {
                acum    += parseInt(this.notas[index].revisioncuaderno);
                n       +=1;
            }
            if(this.notas[index].examenmensual != null && this.notas[index].examenmensual != '')
            {
                acum    += parseInt(this.notas[index].examenmensual);
                n       +=1;
            }
            if(n != 0)
            {
                prom = acum / n;
                this.notas[index].promediomensual = Math.round(prom);
            }else{
                prom = null;
                this.notas[index].promediomensual = null;
            }
           
        }
    }
}
</script>
