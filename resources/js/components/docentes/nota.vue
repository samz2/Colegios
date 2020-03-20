<template>
    <div class="content">
	    <div class="container-fluid">
	    	<div class="row">
			 <div class="col-md-12">
	            <div class="card card-default" width="500">
	                <div class="card-header text-center" style="background-color: #2FA3C6; color: white;">
	                    <h4 class="title">REGISTRO DE NOTAS</h4>  
	                </div>
					<div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Grado</label>
                                        <select v-model="registro.grado" @change="getAreas(registro.grado)" id="grado" class="form-control">
                                        <option v-for="g in grados" :key="g.id" :value="g.id">
                                            {{g.grado}} - {{g.seccion}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Área</label>
                                        <select v-model="registro.area" id="area" @change="getCapacidades(registro.area)" class="form-control">
                                        <option v-for="a in areas" :key="a.IDArea" :value="a.IDArea">
                                            {{a.Descripcion}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Capacidad</label>
                                        <select v-model="registro.capacidad" id="capacidad" @change="viewCapacidad()" class="form-control">
                                        <option v-for="c in capacidades" :key="c.IDCapacidad" :value="c.IDCapacidad">
                                            {{c.Descripcion}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Bimestre</label>
                                        <select v-model="registro.bimestre" id="bimestre" @change="getAlumnos(registro.grado,registro.bimestre)" class="form-control">
                                        <option v-for="m in meses" :key="m.val" :value="m.val">
                                            {{m.mes}}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table border="1" id="table" width="400" class="table table-bordered table-hover text-center" >
                            <tr>
                                <td colspan="8"><b>I.E.P. "LA PRE"</b></td>
                            </tr>
                            <tr>
                                <td colspan="8"><b>REGISTRO AUXILIAR DE NOTAS 2019</b></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>ASIGNATURA</b></td>
                                <td colspan="6" class="text-center"><b>{{area}}</b></td><!--nombre del curso-->
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>PROFESOR</b></td>
                                <td colspan="6" class="text-center"><b>{{nombre}}</b></td>                                
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>BIMESTRE</b></td>
                                <td colspan="6" class="text-center"><b>{{bimestre}}</b></td>
                            </tr>
                            <tr>
                                <td colspan="2" class="text-right"><b>CAPACIDAD</b></td>
                                <td colspan="6"><b>{{capacidad}}</b></td>
                            </tr>
                            <tr style="font-size: 10px;vertical-align:middle;">
                                <td><b>N°</b></td>
                                <td><b>APELLIDOS Y NOMBRES</b></td>
                                <td><b>C1</b></td>
                                <td><b>C2</b></td>
                                <td><b>C3</b></td>
                                <td><b>BIMESTRAL</b></td>
                                <td><b>SIMULACRO</b></td>
                                <td><b>PROMEDIO</b></td>
                            </tr>
                           

                            <tr style="font-size: 10px;" class="noPadding" v-for="(a,index) in alumnos" :key="a.dni">
                                <td>{{a.indice}}</td>
                                <td class="text-left">{{a.alumno}}</td>
                                <!-- <td><input type="button"></td> -->
                                <td><input type="text" @blur="validar(index)" size="4" v-model="a.c1" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="4" v-model="a.c2" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="4" v-model="a.c3" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" @blur="validar(index)" size="4" v-model="a.bimestral" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="2"></td>
                                <td><input type="text" size="4" v-model="a.simulacro" readonly></td>
                                <td><input type="text" size="4" readonly v-model="a.promedio"></td>
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
        <error></error>
    </div>
</div>	
</template>

<script>
import { isNullOrUndefined } from 'util';
    export default {
    data() {
        return {
            nombre:null,
            registro: {
                grado:null,
                area:null,
                capacidad:null,
                bimestre:null,
            },
            alumnos:[{
                indice:null,
                dni:null,
                alumno:null,
                c1:null,
                c2:null,
                c3:null,
                simulacro:null,
                bimestral:null,
                promedio:null,
            }],
            meses: [
                    {val:1,mes:"I"},
                    {val:2,mes:"II"},
                    {val:3,mes:"III"},
                    {val:4,mes:"IV"},
                    ],
            grados:[],
            capacidades:[],
            areas:[],
            mes:null,
            curso:null,
            tipo:null,
            grado:null,
            capacidad:null,
            area:null,
            bimestre:null,
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
        $('#table').hide();
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
                console.log(this.primaria);
            }
            ).catch(error=>{
                console.log(error);
            });
        },
        getGrados()
        {
            this.$Progress.start();
            axios.get("getAreasasignadas")
            .then(data=>
            {
                this.grados     = data.data.grados; 
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        getAreas(grado)
        {
            this.$Progress.start();
            axios.get("/showareas/"+grado)
            .then(data=>
            {
                this.areas     = data.data.areas; 
                this.$Progress.finish();
            }
            ).catch(error=>{
                console.log(error);
            })
            
        },
        getCapacidades(area)
        {
            this.$Progress.start();
            axios.get("/showcapacities/"+area)
            .then(data=>
            {
                this.capacidades     = data.data.capacities; 
                this.$Progress.finish();
                var select = document.getElementById('area');
                this.area = this.areas[select.selectedIndex].Descripcion;
                
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
        getAlumnos(grado,bimestre)
        {
            $('#table').show();
            axios.get("/listaalumnos/"+grado+"/"+bimestre)
            .then(data=>
            {
                this.alumnos = data.data.alumnos;
                this.$Progress.finish();
                var select = document.getElementById('bimestre');
                this.bimestre = this.meses[select.selectedIndex].mes;
            }
            ).catch(error=>{
                console.log(error);
            })
        },
        guardar()
        {
            axios.post("registrarNotas",{
                registro:this.registro,
                alumnos: this.alumnos,
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
				// setTimeout(() => {
				// 	location.reload();
				// }, 1500);
			}).catch(error=>{
				console.log(error);	
			})
        },
        viewCapacidad(){
            var select = document.getElementById('capacidad');
            this.capacidad = this.capacidades[select.selectedIndex].Descripcion;
        },
        validar(index)
        {
            // this.prom(index);
            var n = 0;
            var acum = 0;
            var prom = 0;
            if(this.alumnos[index].c1 <0 || this.alumnos[index].c1 >20)
            {
                this.alumnos[index].c1 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                // this.prom(index);
            }
            if(this.alumnos[index].c2 <0 || this.alumnos[index].c2 >20)
            {
                this.alumnos[index].c2 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                // this.prom(index);
            }
            if(this.alumnos[index].c3 < 0 || this.alumnos[index].c3 > 20)
            {
                this.alumnos[index].c3 = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                // this.prom(index);
            }
            if(this.alumnos[index].bimestral < 0 || this.alumnos[index].bimestral > 20)
            {
                this.alumnos[index].bimestral = null;
                swal({
                        type: 'error',
                        title: 'número ingresado es incorrecto, verifique los datos!',
                        showConfirmButton: false,
                        timer: 2000
                    });
                this.validar(index);
                // this.prom(index);
            }
            if(this.alumnos[index].c1 != null && this.alumnos[index].c1 != '')
            {
                acum    += parseInt(this.alumnos[index].c1);
                n       +=1;
            }
            if(this.alumnos[index].c2 != null && this.alumnos[index].c2 != '')
            {
                acum    += parseInt(this.alumnos[index].c2);
                n       +=1;
            }
            if(this.alumnos[index].c3 != null && this.alumnos[index].c3 != '')
            {
                acum    += parseInt(this.alumnos[index].c3);
                n       +=1;
            }
            if(this.alumnos[index].bimestral != null && this.alumnos[index].bimestral != '')
            {
                acum    += parseInt(this.alumnos[index].bimestral);
                acum    += parseInt(this.alumnos[index].simulacro);
                n       +=2;
            }
            if(n != 0)
            {
                prom = acum / n;
            }
            if(prom != null)
            this.alumnos[index].promedio = Math.round(prom);
            else this.alumnos[index].promedio = null;
        },
        
    }
}
</script>
